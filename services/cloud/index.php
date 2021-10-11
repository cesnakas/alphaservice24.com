<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "1с битрикс облачный, битрикс 24 облачная версия, битрикс 24 облачный, облачный битрикс, облачная версия битрикс");
$APPLICATION->SetPageProperty("title", "Купить Облачную версию Битрикс24. Лицензия от \"Альфа Сервис\"");
$APPLICATION->SetPageProperty("keywords", "1с битрикс облачный, битрикс 24 облачная версия, битрикс 24 облачный, облачный битрикс, облачная версия битрикс");
$APPLICATION->SetPageProperty("description", "Заказать Облачную версию Битрикс24 Корпоративный портал с Настройкой и Доработкой под ваши бизнес-задачи от официального партнера \"Альфа Сервис\".");

$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Купить Облачную версию Битрикс24. Лицензия от \"Альфа Сервис\"");
?>
  <section class="top-screen top-screen--cloud">
    <div  class="container">
      <div class="top-screen__content">
        <div class="top-screen__box">
          <h1 class="top-screen__title">
            Облачная версия Битрикс24
          </h1>
          <div class="top-screen__text">
            <p>
              Внедрение, настройка, доработка и сопровождение Битрикс24 под ваш бизнес
            </p>
          </div>
          <div class="top-screen__buttons">
            <a class="btn top-screen__btn js-button-campaign" href="#" onclick="togglePopup('.custom-order')">
              Заказать
            </a>
          </div>
        </div>
        <div class="top-screen__image">
          <img class="top-screen__img" src="<?=SITE_TEMPLATE_PATH?>/images/cloud/top-cloud.png" alt="Облачная версия Битрикс24">
        </div>
      </div>
    </div>
  </section>

  <section class="whatis whatis--indent">
    <div class="container">
      <h2 class="title whatis__title whatis__title--indent">
        Что такое “облачная версия” и кому она подойдет?
      </h2>

      <div class="whatis__items">
        <div class="whatis__box">
          <img class="whatis__img" src="<?=SITE_TEMPLATE_PATH?>/images/cloud/bitrix.jpg" alt="Облачная версия Битрикс24">
        </div>

        <div class="whatis__box">
          <div class="whatis__text whatis__text--indent">
            <p>
              <span class="whatis__span">Облачная версия «Битрикс24</span>— это онлайн-сервис, работающий удаленно. По этой модели разработчик предоставляет заказчику доступ к программе через интернет. При этом вся информация размещается на серверах поставщика, он обеспечивает их работу, сохранность, безопасность и доступ к данным.
            </p>
          </div>

          <div class="whatis__subtitle">
            <p>
              Кому подойдет такое решение:
            </p>
          </div>

          <ul class="whatis__list">
            <li class="whatis__item">
              Компаниям, которые ранее не имели корпоративный портал
            </li>
            <li class="whatis__item">
              Развивающимся предприятиям, малому бизнесу
            </li>
            <li class="whatis__item">
              Организациям со стратегическим планированием.
            </li>
            <li class="whatis__item">
              Организациям, где небольшой штат сотрудников, а процессы достаточно стандартны
            </li>
            <li class="whatis__item">
              Стартапам
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

<?php
global $arFilter;
$arFilter = ['IBLOCK_SECTION_ID' => 98];
?>
<?php
$APPLICATION->IncludeComponent(
  "bitrix:news.list",
  "tarifs",
  array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "N",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "DETAIL_URL" => "",
    "DISPLAY_BOTTOM_PAGER" => "N",
    "DISPLAY_DATE" => "N",
    "DISPLAY_NAME" => "N",
    "DISPLAY_PICTURE" => "N",
    "DISPLAY_PREVIEW_TEXT" => "N",
    "DISPLAY_TOP_PAGER" => "N",
    "FIELD_CODE" => array(
      0 => "NAME",
      1 => "PREVIEW_PICTURE",
      2 => "",
    ),
    "FILTER_NAME" => "arFilter",
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
    "IBLOCK_ID" => "21",
    "IBLOCK_TYPE" => "catalog",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "INCLUDE_SUBSECTIONS" => "N",
    "MESSAGE_404" => "",
    "NEWS_COUNT" => "20",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "Новости",
    "PARENT_SECTION" => "",
    "PARENT_SECTION_CODE" => "",
    "PREVIEW_TRUNCATE_LEN" => "",
    "PROPERTY_CODE" => array(
      0 => "UF_DESCRIPTION",
      1 => "UF_PRICE",
      2 => "",
    ),
    "SET_BROWSER_TITLE" => "N",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "N",
    "SHOW_404" => "N",
    "SORT_BY1" => "SORT",
    "SORT_BY2" => "SORT",
    "SORT_ORDER1" => "ASC",
    "SORT_ORDER2" => "ASC",
    "STRICT_SECTION_CHECK" => "N",
    "COMPONENT_TEMPLATE" => "tarifs"
  ),
  false
);?>

  <section class="consultation-order--cloud">
    <div class="container container--sm">
      <form class="form">
        <h2 class="title form__title form__title--indent">
          Оставьте заявку для получения консультации
        </h2>

        <div class="form__text">
          <p>Мы свяжемся с Вами в течение 10 минут</p>
        </div>

        <div class="form__body">
          <label class="form__label" for="clname">
            Имя
          </label>
          <input class="form__input form__input--cloud" id="clname" type="text" required placeholder="Ваше имя" name="clname">

          <label class="form__label" for="clphone">
            Телефон
          </label>
          <input class="form__input form__input--cloud" id="clphone" type="tel" required placeholder="+7 905 ___ __ __" name="clphone">

          <label class="form__label" for="clemail">
            Электронный адрес
          </label>
          <input class="form__input form__input--cloud" id="clemail" type="email" required placeholder="address@yandex.ru" name="clemail">

          <label class="form__label" for="cltextarea">
            Комментарий
          </label>
          <textarea class="form__textarea" id="cltextarea" cols="30" rows="10" required placeholder="Оставьте Ваш комментарий здесь" name="cltextarea"></textarea>

          <button class="btn form__btn" type="submit">
            Отправить
          </button>

            <div class="form__checkbox">
                <input type="checkbox" required/>
                <label>Я согласен с обработкой персональных данных в соответствии с <a href="#">политикой
                        конфиденциальности</a></label>
            </div>
        </div>

        <svg class="form__svg">
          <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#message"></use>
        </svg>
      </form>
    </div>
  </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>