<?php
use Bitrix\Main\Application,
    Market\Apps\CAuth,
    Market\Apps\CHelper,
    Bitrix\Main\Loader;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (!Loader::IncludeModule('market.apps')) die();

$request = Application::getInstance()->getContext()->getRequest();
$query = $request->getValues();
if($query['event'] == 'ONAPPINSTALL') {
  $query['APP_XML'] = 'first_call';
  $CAuth = new CAuth();
  $installApp = $CAuth->save($query);
  if($installApp) {
    CHelper::getDataHttp($CAuth->getRestUrl(), 'event.bind', [
        'event' => 'onCrmActivityUpdate',
        'handler' => $CAuth::APP_INCOMING_REQUEST_URL,
        'auth' => $CAuth->getAccesscode(),
      ]
    );

    CHelper::getDataHttp($CAuth->getRestUrl(), 'event.bind', [
        'event' => 'onCrmActivityAdd',
        'handler' => $CAuth::APP_INCOMING_REQUEST_URL,
        'auth' => $CAuth->getAccesscode(),
      ]
    );
  }
}