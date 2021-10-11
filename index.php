<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CJSCore::Init(["ajax"]);

/** @global CMain $APPLICATION */

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Битрикс 24, Bitrix 24, Интеграция битрикс, Внедрение битрикс, Битрикс CRM, Битрикс24, Bitrix24, Интеграция bitrix");
$APPLICATION->SetPageProperty("keywords", "Битрикс 24, Bitrix 24, Интеграция битрикс, Внедрение битрикс, Битрикс CRM, Битрикс24, Bitrix24, Интеграция bitrix");
$APPLICATION->SetPageProperty("description", "Настройка и внедрение Битрикс, Разработка сайтов в ".getCityName()." от сертифицированного партнера 1С - ООО \"Альфа Сервис\".");
$APPLICATION->SetTitle("Заказать Интеграцию и Внедрение Битрикс 24 от \"Альфа Сервис\"");
/** @global CMain $APPLICATION */

$APPLICATION->SetPageProperty("title", "Заказать Интеграцию и Внедрение Битрикс 24 от \"Альфа Сервис\"");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?>
<?php
$APPLICATION->IncludeComponent("bitrix:news.list", "slider", array(
  "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
  "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
  "AJAX_MODE" => "N",    // Включить режим AJAX
  "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
  "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
  "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
  "AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
  "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
  "CACHE_GROUPS" => "Y",    // Учитывать права доступа
  "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
  "CACHE_TYPE" => "A",    // Тип кеширования
  "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
  "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
  "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
  "DISPLAY_DATE" => "N",    // Выводить дату элемента
  "DISPLAY_NAME" => "N",    // Выводить название элемента
  "DISPLAY_PICTURE" => "N",    // Выводить изображение для анонса
  "DISPLAY_PREVIEW_TEXT" => "N",    // Выводить текст анонса
  "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
  "FIELD_CODE" => array(    // Поля
    0 => "NAME",
    1 => "PREVIEW_TEXT",
    2 => "PREVIEW_PICTURE",
    3 => "",
  ),
  "FILTER_NAME" => "",    // Фильтр
  "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
  "IBLOCK_ID" => "14",    // Код информационного блока
  "IBLOCK_TYPE" => "-",    // Тип информационного блока (используется только для проверки)
  "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
  "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
  "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
  "NEWS_COUNT" => "20",    // Количество новостей на странице
  "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
  "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
  "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
  "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
  "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
  "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
  "PAGER_TITLE" => "Новости",    // Название категорий
  "PARENT_SECTION" => "",    // ID раздела
  "PARENT_SECTION_CODE" => "",    // Код раздела
  "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
  "PROPERTY_CODE" => array(    // Свойства
    0 => "ORDER_BUTTON",
    1 => "LINK",
    2 => "",
  ),
  "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
  "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
  "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
  "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
  "SET_STATUS_404" => "N",    // Устанавливать статус 404
  "SET_TITLE" => "N",    // Устанавливать заголовок страницы
  "SHOW_404" => "N",    // Показ специальной страницы
  "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
  "SORT_BY2" => "ACTIVE_FROM",    // Поле для второй сортировки новостей
  "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
  "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
  "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
  "COMPONENT_TEMPLATE" => ".default"
),
  false
); ?>
<?php
$APPLICATION->IncludeComponent("bitrix:news.list", "advantages", array(
  "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
  "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
  "AJAX_MODE" => "N",    // Включить режим AJAX
  "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
  "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
  "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
  "AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
  "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
  "CACHE_GROUPS" => "Y",    // Учитывать права доступа
  "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
  "CACHE_TYPE" => "A",    // Тип кеширования
  "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
  "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
  "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
  "DISPLAY_DATE" => "N",
  "DISPLAY_NAME" => "N",
  "DISPLAY_PICTURE" => "N",
  "DISPLAY_PREVIEW_TEXT" => "N",
  "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
  "FIELD_CODE" => array(    // Поля
    0 => "NAME",
    1 => "PREVIEW_TEXT",
    2 => "",
  ),
  "FILTER_NAME" => "",    // Фильтр
  "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
  "IBLOCK_ID" => "15",    // Код информационного блока
  "IBLOCK_TYPE" => "-",    // Тип информационного блока (используется только для проверки)
  "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
  "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
  "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
  "NEWS_COUNT" => "20",    // Количество новостей на странице
  "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
  "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
  "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
  "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
  "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
  "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
  "PAGER_TITLE" => "Новости",    // Название категорий
  "PARENT_SECTION" => "",    // ID раздела
  "PARENT_SECTION_CODE" => "",    // Код раздела
  "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
  "PROPERTY_CODE" => array(    // Свойства
    0 => "SVG_CODE",
    1 => "",
    2 => "",
    3 => "",
  ),
  "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
  "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
  "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
  "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
  "SET_STATUS_404" => "N",    // Устанавливать статус 404
  "SET_TITLE" => "N",    // Устанавливать заголовок страницы
  "SHOW_404" => "N",    // Показ специальной страницы
  "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
  "SORT_BY2" => "ACTIVE_FROM",    // Поле для второй сортировки новостей
  "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
  "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
  "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
),
  false
); ?>

<?php
$APPLICATION->IncludeComponent("bitrix:news.list", "wedoing", array(
  "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
  "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
  "AJAX_MODE" => "N",    // Включить режим AJAX
  "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
  "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
  "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
  "AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
  "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
  "CACHE_GROUPS" => "Y",    // Учитывать права доступа
  "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
  "CACHE_TYPE" => "A",    // Тип кеширования
  "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
  "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
  "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
  "DISPLAY_DATE" => "N",
  "DISPLAY_NAME" => "N",
  "DISPLAY_PICTURE" => "N",
  "DISPLAY_PREVIEW_TEXT" => "N",
  "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
  "FIELD_CODE" => array(    // Поля
    0 => "NAME",
    1 => "",
  ),
  "FILTER_NAME" => "",    // Фильтр
  "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
  "IBLOCK_ID" => "16",    // Код информационного блока
  "IBLOCK_TYPE" => "-",    // Тип информационного блока (используется только для проверки)
  "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
  "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
  "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
  "NEWS_COUNT" => "20",    // Количество новостей на странице
  "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
  "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
  "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
  "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
  "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
  "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
  "PAGER_TITLE" => "Новости",    // Название категорий
  "PARENT_SECTION" => "",    // ID раздела
  "PARENT_SECTION_CODE" => "",    // Код раздела
  "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
  "PROPERTY_CODE" => array(    // Свойства
    0 => "",
    1 => "",
    2 => "",
  ),
  "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
  "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
  "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
  "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
  "SET_STATUS_404" => "N",    // Устанавливать статус 404
  "SET_TITLE" => "N",    // Устанавливать заголовок страницы
  "SHOW_404" => "N",    // Показ специальной страницы
  "SORT_BY1" => "SORT",    // Поле для первой сортировки новостей
  "SORT_BY2" => "ACTIVE_FROM",    // Поле для второй сортировки новостей
  "SORT_ORDER1" => "ASC",    // Направление для первой сортировки новостей
  "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
  "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
  "COMPONENT_TEMPLATE" => "advantages"
),
  false
); ?>

  <section class="consultation-order--services">
    <div class="container">
      <form class="form" name="request-consultation">
        <h2 class="title form__title">
          Оставьте заявку для получения консультации
        </h2>
        <div class="form__text">
          <p>Мы свяжемся с Вами в течение 10 минут</p>
        </div>
        <div class="form__body">
          <label class="form__label" for="name">
            Имя
          </label>
          <input class="form__input" id="name" name="username" type="text" required placeholder="Ваше имя">

          <label class="form__label" for="userphone">
            Телефон
          </label>
          <input class="form__input" id="phone" name="userphone" type="tel" required
                 placeholder="+7 905 ___ __ __">

          <label class="form__label" for="conemail">
            Электронный адрес
          </label>
          <input class="form__input form__input--contacts" id="conemail" type="email" required=""
                 placeholder="address@yandex.ru" name="useremail">

          <label class="form__label" for="contextarea">
            Комментарий
          </label>
          <textarea class="form__textarea" id="contextarea" cols="30" rows="10" required=""
                    placeholder="Оставьте Ваш комментарий здесь" name="comment"></textarea>

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
          <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#phone"></use>
        </svg>
      </form>
    </div>

    <svg class="consultation-order__bg" width="1920" height="835" viewBox="0 0 1920 835" fill="none"
         xmlns="http://www.w3.org/2000/svg">
      <path d="M0.00685373 0L0.00683594 451.343L1920.01 835V755.743L0.00685373 0Z" fill="#E3F1FD"/>
    </svg>
  </section>

<?php $APPLICATION->IncludeComponent(
  "bitrix:news.list",
  "case",
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
      1 => "PREVIEW_TEXT",
      2 => "PREVIEW_PICTURE",
      3 => "",
    ),
    "FILTER_NAME" => "",
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
    "IBLOCK_ID" => "17",
    "IBLOCK_TYPE" => "content",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "INCLUDE_SUBSECTIONS" => "Y",
    "MESSAGE_404" => "",
    "NEWS_COUNT" => "3",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "Y",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "Новости",
    "PARENT_SECTION" => "",
    "PARENT_SECTION_CODE" => "",
    "PREVIEW_TRUNCATE_LEN" => "",
    "PROPERTY_CODE" => array(
      0 => "",
      1 => "",
    ),
    "SET_BROWSER_TITLE" => "N",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "N",
    "SHOW_404" => "N",
    "SORT_BY1" => "SORT",
    "SORT_BY2" => "ACTIVE_FROM",
    "SORT_ORDER1" => "ASC",
    "SORT_ORDER2" => "ASC",
    "STRICT_SECTION_CHECK" => "N",
    "COMPONENT_TEMPLATE" => "case"
  ),
  false
); ?>

<?php
$APPLICATION->IncludeComponent("bitrix:news.list", "articles", array(
  "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
  "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
  "AJAX_MODE" => "N",    // Включить режим AJAX
  "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
  "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
  "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
  "AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
  "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
  "CACHE_GROUPS" => "Y",    // Учитывать права доступа
  "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
  "CACHE_TYPE" => "A",    // Тип кеширования
  "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
  "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
  "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
  "DISPLAY_DATE" => "N",
  "DISPLAY_NAME" => "N",
  "DISPLAY_PICTURE" => "N",
  "DISPLAY_PREVIEW_TEXT" => "N",
  "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
  "FIELD_CODE" => array(    // Поля
    0 => "NAME",
    1 => "PREVIEW_PICTURE",
    2 => "DATE_ACTIVE_FROM",
    3 => "DATE_CREATE",
    4 => "",
  ),
  "FILTER_NAME" => "",    // Фильтр
  "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
  "IBLOCK_ID" => "18",    // Код информационного блока
  "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
  "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
  "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
  "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
  "NEWS_COUNT" => "8",    // Количество новостей на странице
  "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
  "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
  "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
  "PAGER_SHOW_ALL" => "Y",    // Показывать ссылку "Все"
  "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
  "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
  "PAGER_TITLE" => "Новости",    // Название категорий
  "PARENT_SECTION" => "",    // ID раздела
  "PARENT_SECTION_CODE" => "",    // Код раздела
  "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
  "PROPERTY_CODE" => array(    // Свойства
    0 => "",
    1 => "",
  ),
  "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
  "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
  "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
  "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
  "SET_STATUS_404" => "N",    // Устанавливать статус 404
  "SET_TITLE" => "N",    // Устанавливать заголовок страницы
  "SHOW_404" => "N",    // Показ специальной страницы
  "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
  "SORT_BY2" => "TIMESTAMP_X",    // Поле для второй сортировки новостей
  "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
  "SORT_ORDER2" => "DESC",    // Направление для второй сортировки новостей
  "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
  "COMPONENT_TEMPLATE" => "case"
),
  false
); ?>

<?php
$APPLICATION->IncludeComponent("bitrix:news.list", "partners", array(
  "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
  "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
  "AJAX_MODE" => "N",    // Включить режим AJAX
  "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
  "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
  "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
  "AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
  "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
  "CACHE_GROUPS" => "Y",    // Учитывать права доступа
  "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
  "CACHE_TYPE" => "A",    // Тип кеширования
  "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
  "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
  "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
  "DISPLAY_DATE" => "N",
  "DISPLAY_NAME" => "N",
  "DISPLAY_PICTURE" => "N",
  "DISPLAY_PREVIEW_TEXT" => "N",
  "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
  "FIELD_CODE" => array(    // Поля
    0 => "PREVIEW_PICTURE",
    1 => "",
  ),
  "FILTER_NAME" => "",    // Фильтр
  "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
  "IBLOCK_ID" => "19",    // Код информационного блока
  "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
  "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
  "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
  "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
  "NEWS_COUNT" => "3",    // Количество новостей на странице
  "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
  "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
  "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
  "PAGER_SHOW_ALL" => "Y",    // Показывать ссылку "Все"
  "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
  "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
  "PAGER_TITLE" => "Новости",    // Название категорий
  "PARENT_SECTION" => "",    // ID раздела
  "PARENT_SECTION_CODE" => "",    // Код раздела
  "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
  "PROPERTY_CODE" => array(    // Свойства
    0 => "",
    1 => "",
  ),
  "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
  "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
  "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
  "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
  "SET_STATUS_404" => "N",    // Устанавливать статус 404
  "SET_TITLE" => "N",    // Устанавливать заголовок страницы
  "SHOW_404" => "N",    // Показ специальной страницы
  "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
  "SORT_BY2" => "TIMESTAMP_X",    // Поле для второй сортировки новостей
  "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
  "SORT_ORDER2" => "DESC",    // Направление для второй сортировки новостей
  "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
  "COMPONENT_TEMPLATE" => "articles"
),
  false
); ?>

<?php
$APPLICATION->IncludeComponent("bitrix:news.list", "reviews", array(
  "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
  "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
  "AJAX_MODE" => "N",    // Включить режим AJAX
  "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
  "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
  "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
  "AJAX_OPTION_STYLE" => "N",    // Включить подгрузку стилей
  "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
  "CACHE_GROUPS" => "Y",    // Учитывать права доступа
  "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
  "CACHE_TYPE" => "A",    // Тип кеширования
  "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
  "DETAIL_URL" => "",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
  "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
  "DISPLAY_DATE" => "N",
  "DISPLAY_NAME" => "N",
  "DISPLAY_PICTURE" => "N",
  "DISPLAY_PREVIEW_TEXT" => "N",
  "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
  "FIELD_CODE" => array(    // Поля
    0 => "NAME",
    1 => "PREVIEW_TEXT",
    2 => "PREVIEW_PICTURE",
    3 => "",
  ),
  "FILTER_NAME" => "",    // Фильтр
  "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
  "IBLOCK_ID" => "20",    // Код информационного блока
  "IBLOCK_TYPE" => "content",    // Тип информационного блока (используется только для проверки)
  "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
  "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
  "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
  "NEWS_COUNT" => "10",    // Количество новостей на странице
  "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
  "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
  "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
  "PAGER_SHOW_ALL" => "Y",    // Показывать ссылку "Все"
  "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
  "PAGER_TEMPLATE" => ".default",    // Шаблон постраничной навигации
  "PAGER_TITLE" => "Новости",    // Название категорий
  "PARENT_SECTION" => "",    // ID раздела
  "PARENT_SECTION_CODE" => "",    // Код раздела
  "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
  "PROPERTY_CODE" => array(    // Свойства
    0 => "DATE",
    1 => "JOB_POSITION",
    2 => "",
  ),
  "SET_BROWSER_TITLE" => "N",    // Устанавливать заголовок окна браузера
  "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
  "SET_META_DESCRIPTION" => "N",    // Устанавливать описание страницы
  "SET_META_KEYWORDS" => "N",    // Устанавливать ключевые слова страницы
  "SET_STATUS_404" => "N",    // Устанавливать статус 404
  "SET_TITLE" => "N",    // Устанавливать заголовок страницы
  "SHOW_404" => "N",    // Показ специальной страницы
  "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
  "SORT_BY2" => "TIMESTAMP_X",    // Поле для второй сортировки новостей
  "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
  "SORT_ORDER2" => "DESC",    // Направление для второй сортировки новостей
  "STRICT_SECTION_CHECK" => "N",    // Строгая проверка раздела для показа списка
  "COMPONENT_TEMPLATE" => "partners"
),
  false
); ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>