<?php

namespace Market\Apps;

use Its\Service\CDeal;

class CAuth
{
  const HL_ENTITY = 'InstalledAppsAuth';
  const APP_INCOMING_REQUEST_URL = 'https://alphaservice24.com/applications/callevents/index.php';
  private $hlClassName, $hlID, $appData;
  
  public function __construct()
  {
    $hlEntity = CHelper::getHighloadBlockByName(self::HL_ENTITY);
    $this->hlClassName = $hlEntity['ENTITY'];
    $this->hlID = $hlEntity['ID'];
  }

  private function getEnumAppId($appXml)
  {
    $filterEnumField = [
      'FIELD_NAME' => 'UF_APP',
      'ENTITY_ID' => 'HLBLOCK_'.$this->hlID,
    ];
    $appEnum = CHelper::getEnumField($filterEnumField);

    foreach($appEnum as $val) {
      if($val['XML_ID'] == $appXml) {
        return $val['ID'];
      }
    }

    return false;
  }

  public function save($query)
  {
    $appEnumID = $this->getEnumAppId($query['APP_XML']);
    if($appEnumID <= 0) die();

    if($query['event'] == 'ONAPPINSTALL') {
      $arFilter = [
        'UF_DOMAIN' => $query['auth']['domain'],
        'UF_APP' => $appEnumID
      ];
      $appResult = $this->getList([], ['ID'], $arFilter);


      $arFields = [
        'UF_VERSION' => $query['data']['VERSION'],
        'UF_LANGUAGE_ID' => $query['data']['LANGUAGE_ID'],
        'UF_ACCESS_TOKEN' => $query['auth']['access_token'],
        'UF_SCOPE' => $query['auth']['scope'],
        'UF_DOMAIN' => $query['auth']['domain'],
        'UF_STATUS' => $query['auth']['status'],
        'UF_USER_ID' => $query['auth']['user_id'],
        'UF_REFRESH_TOKEN' => $query['auth']['refresh_token'],
        'UF_APPLICATION_TOKEN' => $query['auth']['application_token'],
        'UF_APP' => $appEnumID,
        'UF_SERVER_ENDPOINT' => $query['auth']['server_endpoint'],
        'UF_CLIENT_ENDPOINT' => $query['auth']['client_endpoint'],
      ];
      if(count($appResult) == 0) {
        $this->hlClassName::add($arFields);
      } else {
        $this->hlClassName::update($appResult[0]['ID'], $arFields);
      }

      $this->appData = $arFields;
    } else {
      $arFilter = [
        'UF_DOMAIN' => $query['DOMAIN'],
        'UF_APP' => $appEnumID
      ];
      $appResult = $this->getList([], ['ID'], $arFilter);

      $arFields = [
        'UF_APP' => $appEnumID,
        'UF_DOMAIN' => $query['DOMAIN'],
        'UF_LANGUAGE_ID' => $query['LANG'],
        'UF_AUTH_EXPIRES' => $query['AUTH_EXPIRES'],
        'UF_MEMBER_ID' => $query['member_id'],
        'UF_REFRESH_TOKEN' => $query['REFRESH_ID'],
        'UF_PLACEMENT' => $query['PLACEMENT'],
        'UF_STATUS' => $query['status'],
        'UF_ACCESS_TOKEN' => $query['AUTH_ID'],
        'UF_APPLICATION_TOKEN' => $query['APP_SID'],
        'UF_CLIENT_ENDPOINT' => 'https://'.htmlspecialchars($query['DOMAIN']).'/rest/',
        'UF_SERVER_ENDPOINT' => $query['auth']['server_endpoint'],
      ];
      if(count($appResult) == 0) {
        $this->hlClassName::add($arFields);
      } else {
        $this->hlClassName::update($appResult[0]['ID'], $arFields);
      }

      $this->appData = $arFields;
    }


    return true;
  }

  public function getAccesscode()
  {
    return $this->appData['UF_ACCESS_TOKEN'];
  }

  public function getRestUrl()
  {
    return $this->appData['UF_CLIENT_ENDPOINT'];
  }

  public function getList($order = [], $select = ['*'], $filter = []): array
  {
    $rsRes = $this->hlClassName::getlist([
      'order' => $order,
      'filter' => $filter,
      'select' => $select,
    ]);

    $result = [];
    while ($arResult = $rsRes->fetch()) {
      $result[] = $arResult;
    }

    return $result;
  }

  public function authData($domain, $appXml)
  {
    $appEnumID = $this->getEnumAppId($appXml);
    if($appEnumID <= 0) die();

    $arFilter = [
      'UF_DOMAIN' => $domain,
      'UF_APP' => $appEnumID
    ];
    $resultData = $this->getList([], ['*'], $arFilter);

    if(count($resultData) == 1) {
      $this->appData = $resultData[0];
      return true;
    }

    return false;
  }
}