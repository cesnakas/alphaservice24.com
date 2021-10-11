<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @global CMain $APPLICATION */

use Bitrix\Main\Page\Asset,
  Bitrix\Main\Application,
  Bitrix\Main\Localization\Loc;

?><!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title><?php $APPLICATION->ShowTitle() ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/png" sizes="16x16" href="/icon-16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/icon-32.png">
  <link rel="icon" type="image/png" sizes="36x36" href="/icon-36.png">
  <link rel="icon" type="image/png" sizes="48x48" href="/icon-48.png">
  <link rel="icon" type="image/png" sizes="72x72" href="/icon-72.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/icon-96.png">
  <link rel="icon" type="image/png" sizes="144x144" href="/icon-144.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/icon-192.png">
  <link rel="icon" type="image/png" sizes="256x256" href="/icon-256.png">
  <link rel="icon" type="image/png" sizes="384x384" href="/icon-384.png">
  <link rel="icon" type="image/png" sizes="512x512" href="/icon-512.png">
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="/apple-touch-icon-167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180.png">
  <link rel="icon" type="image/png" href="/mstile-70.png">
  <link rel="icon" type="image/png" href="/mstile-144.png">
  <link rel="icon" type="image/png" href="/mstile-150.png">
  <link rel="icon" type="image/png" href="/mstile-310.png">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#ff0000">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/mstile-144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="manifest" href="/manifest.json">
  <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/style.min.css"); ?>
  <?php Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/slick.css"); ?>
  <?php $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
<!--    Добавить внутрь тега "<header>"    -->
<!--  Начало - Всплывающее окно списка городов  -->
<div class="js-popup js-cities custom-modal">
  <div class="custom-modal-wrapper">
    <div class="custom-modal-content popup-content">
      <div class="form-cities mini-close-icon">
        <div class="form-cities-inner">
          <p>
            Выберите город
          </p>
          <?php $APPLICATION->IncludeComponent(
            "bitrix:sale.location.selector.search",
            "",
            array(
              "CACHE_TIME" => "36000000",
              "CACHE_TYPE" => "A",
              "CODE" => "",
              "COMPOSITE_FRAME_MODE" => "A",
              "COMPOSITE_FRAME_TYPE" => "AUTO",
              "FILTER_BY_SITE" => "N",
              "ID" => "",
              "INITIALIZE_BY_GLOBAL_EVENT" => "",
              "INPUT_NAME" => "LOCATION",
              "JS_CALLBACK" => "",
              "JS_CONTROL_GLOBAL_ID" => "",
              "PROVIDE_LINK_BY" => "id",
              "SHOW_DEFAULT_LOCATIONS" => "N",
              "SUPPRESS_ERRORS" => "N"
            )
          ); ?>
          <ul class="cities-list">
            <li>
              <a href="#" id="city" onclick="setCity(187);">Москва</a>
            </li>
            <li>
              <a href="#" id="city" onclick="setCity(188);">Санкт-Петербург</a>
            </li>
            <li>
              <a href="#" id="city" onclick="setCity(19676);">Казань</a>
            </li>
            <li>
              <a href="#" id="city" onclick="setCity(19949);">Самара</a>
            </li>
            <li>
              <a href="#" id="city" onclick="setCity(19951);">Тольятти</a>
            </li>
          </ul>
        </div>
        <div onclick="togglePopup('.js-cities')" class="close-popup"></div>
      </div>
    </div>
  </div>
</div>
<!--  Конец - Всплывающее окно списка городов-->

<!--  Начало    - Мобильное меню (на весь экран)  -->
<div id="mob-menu" class="mobile-menu mini-close-icon">
  <div id="mob-menu-content" class="mobile-menu-inner">
    <?php $APPLICATION->IncludeComponent("bitrix:menu", "main_mobile", array(
      "ALLOW_MULTI_SELECT" => "N",  // Разрешить несколько активных пунктов одновременно
      "CHILD_MENU_TYPE" => "left",  // Тип меню для остальных уровней
      "DELAY" => "N",  // Откладывать выполнение шаблона меню
      "MAX_LEVEL" => "2",  // Уровень вложенности меню
      "MENU_CACHE_GET_VARS" => "",  // Значимые переменные запроса
      "MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
      "MENU_CACHE_TYPE" => "N",  // Тип кеширования
      "MENU_CACHE_USE_GROUPS" => "Y",  // Учитывать права доступа
      "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
      "USE_EXT" => "Y",  // Подключать файлы с именами вида .тип_меню.menu_ext.php
      "COMPONENT_TEMPLATE" => "horizontal_multilevel"
    ),
      false
    );
    ?>
    <a id="mob-menu-btn" class="btn" onclick="toggleMenu(); togglePopup('.js-callback')" href="#">
      Оставить заявку
    </a>
  </div>
  <a href="/search" class="mob-search">
    <svg width="19" height="19" viewBox="0 0 19 19" fill="#FFF" xmlns="http://www.w3.org/2000/svg">
      <path d="M8 16C9.77498 15.9996 11.4988 15.4054 12.897 14.312L17.293 18.708L18.707 17.294L14.311 12.898C15.405 11.4997 15.9996 9.77544 16 8C16 3.589 12.411 0 8 0C3.589 0 0 3.589 0 8C0 12.411 3.589 16 8 16ZM8 2C11.309 2 14 4.691 14 8C14 11.309 11.309 14 8 14C4.691 14 2 11.309 2 8C2 4.691 4.691 2 8 2Z"
            fill="#4F4F4F"/>
    </svg>
  </a>
  <div onclick="toggleMenu()" class="close-popup"></div>
</div>
<!--  Конец     - Мобильное меню (на весь экран)  -->

<div class="topbar">
  <div class="container">
    <div class="topbar-inner">
      <div class="topbar-item topbar-sity">
        <a onclick="togglePopup('.js-cities')" href="#">
          <p id="choseCity"><?=getCityName()?></p>
        </a>
      </div>

      <div class="topbar-item topbar-info">
        <p>
          Ежедневно с 9:00 до 18:00
        </p>
      </div>

      <div class="topbar-item topbar-mail">
        <p>
          <a href="mailto:info@alphaservice24.com">info@alphaservice24.com</a>
        </p>
      </div>

      <div class="topbar-item topbar-search">
        <form id="search" role="search" action="../../../search/index.php">
          <input type="search" name="q" id="" placeholder="Введите запрос">
          <button type="submit">
            <svg width="19" height="19" viewBox="0 0 19 19" fill="#FFF" xmlns="http://www.w3.org/2000/svg">
              <path d="M8 16C9.77498 15.9996 11.4988 15.4054 12.897 14.312L17.293 18.708L18.707 17.294L14.311 12.898C15.405 11.4997 15.9996 9.77544 16 8C16 3.589 12.411 0 8 0C3.589 0 0 3.589 0 8C0 12.411 3.589 16 8 16ZM8 2C11.309 2 14 4.691 14 8C14 11.309 11.309 14 8 14C4.691 14 2 11.309 2 8C2 4.691 4.691 2 8 2Z" fill="white"/>
            </svg>
          </button>
        </form>
      </div>

      <div class="topbar-item topbar-phone">
        <p>
          <a href="tel:+78277086868">
            +7 (927) 708-68-68
          </a>
        </p>
      </div>
    </div>
  </div>
</div>

<div class="menu-bg"></div>

<div class="container menu-wrap-center">
  <nav class="menu menu-wrap">
    <a href="/" class="logo">
      <img class="logo__img" src="<?=SITE_TEMPLATE_PATH?>/images/logo_full.png" alt="АльфаСервис" width="222px" height="37px">
    </a>

    <?php $APPLICATION->IncludeComponent("bitrix:menu", "main_new", array(
      "ALLOW_MULTI_SELECT" => "N",  // Разрешить несколько активных пунктов одновременно
      "CHILD_MENU_TYPE" => "left",  // Тип меню для остальных уровней
      "DELAY" => "N",  // Откладывать выполнение шаблона меню
      "MAX_LEVEL" => "2",  // Уровень вложенности меню
      "MENU_CACHE_GET_VARS" => "",  // Значимые переменные запроса
      "MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
      "MENU_CACHE_TYPE" => "N",  // Тип кеширования
      "MENU_CACHE_USE_GROUPS" => "Y",  // Учитывать права доступа
      "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
      "USE_EXT" => "Y",  // Подключать файлы с именами вида .тип_меню.menu_ext.php
      "COMPONENT_TEMPLATE" => "horizontal_multilevel"
    ),
      false
    );
    ?>

    <a class="btn" href="#" onclick="togglePopup('.js-callback')">
      Оставить заявку
    </a>

    <!--    Обертку <div class="header"> удалить после перемещения в <header class="header">     -->
    <div class="header">
      <button class="menu__burger" onclick="toggleMenu()">
        <span class="menu__line"></span>
      </button>
    </div>
  </nav>
</div>
<main class="main content-margin-height">