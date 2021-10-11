<?php

namespace Market\Apps;

use Bitrix\Main\Loader,
  Bitrix\Highloadblock\HighloadBlockTable,
  Bitrix\Main\Web\HttpClient,
  Bitrix\Main\Web\Json,
  Bitrix\Main\Config\Option,
  CUserFieldEnum;

class CApplication
{
  public static function getHlEntity($nameEntity)
  {
    if (!Loader::includeModule("highloadblock"))
      return false;

    $hlblock = HighloadBlockTable::getList([
      'filter' => ['=NAME' => $nameEntity]
    ])->fetch();

    if (!$hlblock) return false;

    return (HighloadBlockTable::compileEntity($hlblock))->getDataClass();
  }

  public static function getEnumField($fieldName, $xml = true): array
  {
    $arResult = [];
    $CUserFieldEnum = new CUserFieldEnum();
    $rsEnumField = $CUserFieldEnum->GetList([], ["USER_FIELD_ID" => $fieldName]);
    while ($arRes = $rsEnumField->GetNext()) {
      if($xml)
        $arResult[$arRes['XML_ID']] = $arRes;
      else
        $arResult[$arRes['ID']] = $arRes;
    }

    return $arResult;
  }

  public static function getDataHttp($method, $params)
  {
    sleep(1);
    $http = new HttpClient();
    $http->setTimeout(20);
    $http->waitResponse(20);
    $http->setStreamTimeout(20);
    $json = $http->post(CMain::REST_API_URL . $method, $params);
    $result = Json::decode($json);

    if ($result['error'] == 'QUERY_LIMIT_EXCEEDED') {
      CMain::getDataHttp($method, $params);
    }

    return $result;
  }

  public static function getAccessTokenBitrix24()
  {
    $currentTimestamp = time();
    $timestamp = Option::get(self::MODULE_ID, "local_app_access_token_timestamp");

    if ($currentTimestamp >= $timestamp) {
      $aupdateAccessTokenUrl = 'https://oauth.bitrix.info/oauth/token/?grant_type=refresh_token&client_id=' . self::LOCAL_APP_CLIENT_ID . '&client_secret=' . self::LOCAL_APP_CLIENT_SECRET . '&refresh_token=' . Option::get(self::MODULE_ID, "local_app_refresh_token");
      $http = new HttpClient();
      $result = Json::decode($http->get($aupdateAccessTokenUrl));

      if($result['error'] != 'expired_token') {
        Option::set(self::MODULE_ID, "local_app_access_token_timestamp", $result['expires']);
        $accessToken = $result['access_token'];
        Option::set(self::MODULE_ID, "local_app_access_token", $accessToken);
        Option::set(self::MODULE_ID, "local_app_refresh_token", $result['refresh_token']);
      }
    } else {
      $accessToken = Option::get(self::MODULE_ID, "local_app_access_token");
    }

    return $accessToken;
  }
}