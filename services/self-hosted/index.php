<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetPageProperty("keywords_inner", "1с битрикс управление сайтом, 1с БУС");
$APPLICATION->SetPageProperty("title", "Купить Коробочную версию \"1С Битрикс УС\". Лицензия от \"Альфа Сервис\"");
$APPLICATION->SetPageProperty("keywords", "1с битрикс коробка, битрикс 24 коробка, битрикс 24 коробочная, битрикс 24 коробочная версия, битрикс коробка цена, битрикс коробочная версия, коробка битрикс, коробочный битрикс");
$APPLICATION->SetPageProperty("description", "Заказать Коробочную версию (коробку) Битрикс24 Корпоративный портал с Настройкой и Доработкой под ваши бизнес-задачи от оф. партнера \"Альфа Сервис\".");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Купить платформу \"1С Битрикс УС\". Лицензия от \"Альфа Сервис\"");
?>
  <section class="top-screen top-screen--boxed">
    <div class="container">
      <div class="top-screen__content">
        <div class="top-screen__box">
          <h1 class="top-screen__title">
            Коробочная версия Битрикс24
          </h1>
          <div class="top-screen__text">
            <p>
              Внедрение, настройка, доработка и сопровождение Битрикс24 под ваш бизнес
            </p>
          </div>
          <div class="top-screen__buttons">
            <a class="btn top-screen__btn" href="#" onclick="togglePopup('.js-order-self-hosted')">
              Заказать
            </a>
          </div>
        </div>
        <div class="top-screen__image">
          <img class="top-screen__img" src="<?=SITE_TEMPLATE_PATH?>/images/boxed/amico.png" alt="Грузовик и человек">
        </div>
      </div>
    </div>
  </section>

  <section class="whatis">
    <div class="container">
      <h2 class="title whatis__title">
        Что такое “коробочная версия” и кому она подойдет?
      </h2>

      <div class="whatis__items">
        <div class="whatis__box whatis__box--order">
          <img class="whatis__img" src="<?=SITE_TEMPLATE_PATH?>/images/boxed/product.jpg" alt="Коробочная версия Битрикс24">
        </div>

        <div class="whatis__box">
          <div class="whatis__text">
            <p>
              <span class="whatis__span">Коробочная версия</span> — это серверное решение. В данном случае разработчик предоставляет только пакет программного обеспечения, а его установкой на сервера, обслуживанием, обновлением и технической поддержкой необходимо заниматься самостоятельно.
            </p>
          </div>

          <div class="whatis__subtitle">
            <p>
              Кому подойдет такое решение:
            </p>
          </div>

          <ul class="whatis__list">
            <li class="whatis__item">
              Тем, кому нужно настроить «Битрикс24» под себя.
            </li>
            <li class="whatis__item">
              Крупным компаниям со сложными и нестандартными бизнес-процессами.
            </li>
            <li class="whatis__item">
              Организациям со стратегическим планированием.
            </li>
            <li class="whatis__item">
              Тем, кто хочет глубоко настроить бизнес-логику автоматизации бизнеса.
            </li>
            <li class="whatis__item">
              Компаниям, которым критически важна безопасность и защита данных.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

<?php
global $arFilter;
$arFilter = ['IBLOCK_SECTION_ID' => 99];
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

  <section class="consultation-order--boxed">
    <div class="container container--sm">
      <form class="form consultation-order__form">
        <h2 class="title form__title form__title--indent">
          Оставьте заявку для получения консультации
        </h2>

        <div class="form__text">
          <p>Мы свяжемся с Вами в течение 10 минут</p>
        </div>

        <div class="form__body">
          <label class="form__label" for="boxname">
            Имя
          </label>
          <input class="form__input form__input--boxed" id="boxname" type="text" required placeholder="Ваше имя" name="boxname">

          <label class="form__label" for="boxphone">
            Телефон
          </label>
          <input class="form__input form__input--boxed" id="boxphone" type="tel" required placeholder="+7 905 ___ __ __" name="boxtel">

          <label class="form__label" for="boxemail">
            Электронный адрес
          </label>
          <input class="form__input form__input--boxed" id="boxemail" type="email" required placeholder="address@yandex.ru" name="boxemail">

          <label class="form__label" for="boxtextarea">
            Комментарий
          </label>
          <textarea class="form__textarea" id="boxtextarea" cols="30" rows="10" required placeholder="Оставьте Ваш комментарий здесь" name="boxtextarea"></textarea>

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