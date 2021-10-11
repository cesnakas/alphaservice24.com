<?php
use Bitrix\Main\Loader,
  Bitrix\Main\Web\Cookie,
  Bitrix\Sale\Location\LocationTable,
  Bitrix\Main\Application;

//Получить наименование текущего города пользователя
function getCityName($ucFirst = true): string
{
  $cityName = Application::getInstance()->getContext()->getRequest()->getCookie("USER_CITY");

  if(empty($cityName)) {
    $session = Application::getInstance()->getSession();
    $cityName = $session['USER_CITY'];
  }

  $cityName = ($ucFirst) ? mb_convert_case($cityName, MB_CASE_TITLE, "UTF-8") : mb_strtolower($cityName);

  return $cityName;
}

function setCityName($cityId)
{
  $application = Application::getInstance();
  $context = $application->getContext();

  $lang = getLang();

  $cityName = '';

  if ($cityId > 0) {
    if (Loader::includeModule("sale")) {
      $cityName = LocationTable::getList([
        'filter' => ['=NAME.LANGUAGE_ID' => $lang, 'ID' => $cityId],
        'select' => ['LOCATION_NAME' => 'NAME.NAME']
      ])->fetch()['LOCATION_NAME'];
    }
  }

  $session = $application->getSession();
  if(!empty($cityName)) {
    $cookie = new Cookie("USER_CITY", $cityName);
    $cookie->setDomain("alphaservice24.com");
    $context->getResponse()->addCookie($cookie);
    $context->getResponse()->writeHeaders();

    if (!$session->has('USER_CITY')) {
      $session->set('USER_CITY', $cityName);
    }
  }
}

function getLang()
{
  $langs = [
    'ru' => ['ru', 'be', 'uk', 'ky', 'ab', 'mo', 'et', 'lv'],
    'en' => 'en'
  ];
  $CLangDetect = new CLangDetect();
  $lang = $CLangDetect->getBestMatch('ru', $langs);

  return $lang;
}