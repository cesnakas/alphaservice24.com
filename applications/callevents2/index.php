<?php

use Bitrix\Main\Application,
  Market\Apps\CAuth,
  Market\Apps\CHelper,
  Bitrix\Main\Loader;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (!Loader::IncludeModule('market.apps')) die();

$request = Application::getInstance()->getContext()->getRequest();
$query = $request->getValues();

$activityId = 0;
if(($query['event'] == 'ONCRMACTIVITYUPDATE' || $query['event'] == 'ONCRMACTIVITYADD') && !empty($query['auth']['domain'])) {
  $CAuth = new CAuth();
  $isAuthData = $CAuth->authData($query['auth']['domain'], 'first_call');
  if(!$isAuthData) die();
  $activityId = intval($_REQUEST['data']['FIELDS']['ID']);
  $accessToken = $_REQUEST['auth']['access_token'];
}

$userFieldDateCall = 'UF_CRM_1627470660033';
$userFieldDateCallString = 'UF_CRM_1627547162618';
$userFieldDurationCall = 'UF_CRM_1627470683334';
$userFieldTimeCall = 'UF_CRM_1627543848670';
$userFieldDateCreateLeadString = 'UF_CRM_1627547279928';

//$userFieldDateCall = 'UF_CRM_1627381598120';
//$userFieldDurationCall = 'UF_CRM_1627381635666';
$providerId = 'VOXIMPLANT_CALL';       //Тип - звонок
$direction = 2;                 //Исходящий
$ownerTypeId = 1;               //В лиде
$completed = 'Y';               //Выполненный

if($activityId > 0) {
  $arParams = [
    'filter' => [
      'ID' => $activityId,
      'COMPLETED' => $completed,
      'PROVIDER_ID' => $providerId,
      'OWNER_TYPE_ID' => $ownerTypeId,
      'DIRECTION' => $direction
    ],
    'select' => ['OWNER_TYPE_ID', 'OWNER_ID'],
    'auth' => $accessToken,
//    'auth' => $CAuth->getAccesscode(),
  ];
  $resultActivity = CHelper::getDataHttp($CAuth->getRestUrl(), 'crm.activity.list', $arParams);

  if($resultActivity['total'] > 0) {
    $leadId = $resultActivity['result'][0]['OWNER_ID'];
    $typeId = $resultActivity['result'][0]['OWNER_TYPE_ID'];
    $arParams = [
      'order' => ['ID' => 'DESC'],
      'filter' => [
        'OWNER_ID' => $leadId,
        'OWNER_TYPE_ID' => $typeId,
        'PROVIDER_ID' => $providerId,
        'DIRECTION' => $direction
      ],
      'select' => ['ID', 'START_TIME', 'END_TIME'],
      'auth' => $accessToken,
//      'auth' => $CAuth->getAccesscode(),
    ];
    $result = CHelper::getDataHttp($CAuth->getRestUrl(), 'crm.activity.list', $arParams);

    if ($result['total'] == 1) {
      $arParams = [
        'filter' => [
          'ID' => $leadId,
        ],
        'select' => ['DATE_CREATE'],
        'auth' => $accessToken,
//        'auth' => $CAuth->getAccesscode(),
      ];
      $resultLeadDateCreate = CHelper::getDataHttp($CAuth->getRestUrl(), 'crm.lead.list', $arParams)['result'][0]['DATE_CREATE'];
      $resultLeadDateCreateObj = new DateTime($resultLeadDateCreate);

      $timeStart = new DateTime($result['result'][0]['START_TIME']);
      $timeEnd = new DateTime($result['result'][0]['END_TIME']);
      $countMinutes = intval($timeStart->diff($timeEnd)->format('%i'));

      $countMinutesCall = $resultLeadDateCreateObj->diff($timeStart)->format('%d дней %H часов %i минуты');

      $fieldsLeadUpdate = [
        'ID' => $leadId,
        'fields' => [
          $userFieldDateCall => $timeStart->format('d.m.Y H:i:s'),
          $userFieldDateCallString => $timeStart->format('d.m.Y H:i:s'),
          $userFieldDurationCall => $countMinutes,
          $userFieldTimeCall => $countMinutesCall,
          $userFieldDateCreateLeadString => $resultLeadDateCreateObj->format('d.m.Y H:i:s'),
        ],
        'auth' => $accessToken,
//        'auth' => $CAuth->getAccesscode(),
      ];

      $result = CHelper::getDataHttp($CAuth->getRestUrl(), 'crm.lead.update', $fieldsLeadUpdate);


      $f = fopen($_SERVER['DOCUMENT_ROOT']."/myfile.txt", "a");
      fwrite($f, print_r($fieldsLeadUpdate, 1));
      fclose($f);
    }
  }
}