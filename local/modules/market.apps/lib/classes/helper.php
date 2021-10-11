<?php

namespace Market\Apps;

use Bitrix\Main\Loader,
    Bitrix\Highloadblock\HighloadBlockTable,
    CUserFieldEnum,
    Bitrix\Main\Web\Json,
    Bitrix\Main\Web\HttpClient,
    CUserTypeEntity;

class CHelper
{
  public static function getHighloadBlockByName($nameEntity)
  {
    if (!Loader::includeModule("highloadblock"))
      return false;

    $hlblock = HighloadBlockTable::getList([
      'filter' => ['=NAME' => $nameEntity]
    ])->fetch();

    if (!$hlblock) return false;

    return [
      'ID' => $hlblock['ID'],
      'ENTITY' => (HighloadBlockTable::compileEntity($hlblock))->getDataClass(),
    ];
  }

  public static function getEnumField($arFilter): array
  {
    $fieldId = 0;
    if(!empty($arFilter['FIELD_NAME']) && empty($arFilter['FIELD_ID']) && !empty($arFilter['ENTITY_ID'])) {
      $filter = [
        'FIELD_NAME' => $arFilter['FIELD_NAME'],
        'ENTITY_ID' => $arFilter['ENTITY_ID']
      ];
      $fieldId = CUserTypeEntity::GetList([], $filter)->fetch()['ID'];
    }

    if($fieldId > 0) {
      $arResult = [];
      $CUserFieldEnum = new CUserFieldEnum();
      $rsEnumField = $CUserFieldEnum->GetList([], ["USER_FIELD_ID" => $fieldId]);
      while ($arRes = $rsEnumField->GetNext()) {
        $arResult[$arRes['ID']] = $arRes;
      }
    }

    return $arResult;
  }

  public static function getDataHttp($restUrl, $method, $params)
  {
    $http = new HttpClient();
    $http->setTimeout(20);
    $http->waitResponse(20);
    $http->setStreamTimeout(20);
    $json = $http->post($restUrl . $method, $params);
    $result = Json::decode($json);

    if ($result['error'] == 'QUERY_LIMIT_EXCEEDED') {
      self::getDataHttp($method, $params);
    }

    return $result;
  }
}