<?php

use Bitrix\Main\EventManager,
  Bitrix\Main\Web\Cookie,
  Bitrix\Main\Loader,
  Bitrix\Main\Service\GeoIp,
  Bitrix\Main\Application;

$eventManager = EventManager::getInstance();
$eventManager->addEventHandler("main", "OnBeforeProlog", "OnBeforePrologHandler");

//detected lang and city
function OnBeforePrologHandler()
{
  $application = Application::getInstance();
  $context = $application->getContext();

  $lang = getLang();

  $session = $application->getSession();

  $bitrixCityId = intval($context->getRequest()->getCookie("BITRIX_CITY"));
  if ($bitrixCityId > 0) {
    setCityName($bitrixCityId);
  } else {
    $currentUserCity = $context->getRequest()->getCookie("USER_CITY");
    if (empty($session['USER_CITY']) && empty($currentUserCity)) {
      GeoIp\Manager::useCookieToStoreInfo(true);
      $ipAddress = GeoIp\Manager::getRealIp();
      $cityName = GeoIp\Manager::getDataResult($ipAddress, $lang, array('cityName'))->getGeoData()->cityName;

      $cookie = new Cookie("USER_CITY", $cityName);
      $cookie->setDomain("alphaservice24.com");
      $context->getResponse()->addCookie($cookie);
      $context->getResponse()->writeHeaders();
      $session->set('USER_CITY', $cityName);
    }
  }
}