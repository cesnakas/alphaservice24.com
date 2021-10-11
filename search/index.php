<?php
/** @global CMain $APPLICATION */

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "N");
$APPLICATION->SetPageProperty("keywords_inner", "битрикс 24 стоимость внедрения, внедрение 1с битрикс, внедрение crm битрикс, внедрение crm битрикс 24, внедрение битрикс, внедрение битрикс 24");
$APPLICATION->SetPageProperty("title", "Поиск по сайту \"Альфа Сервис\"");
$APPLICATION->SetPageProperty("keywords", "битрикс 24 стоимость внедрения, внедрение 1с битрикс, внедрение crm битрикс, внедрение crm битрикс 24, внедрение битрикс, внедрение битрикс 24");
$APPLICATION->SetPageProperty("description", "Внедрение и Настройка CRM Битрикс24 в ваш бизнес под ключ от сертифицированного партнера 1С - \"Альфа Сервис\".");
$APPLICATION->AddChainItem("Поиск");
$APPLICATION->SetTitle("Поиск по сайту \"Альфа Сервис\"");
?>
<?php $APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"search", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"COMPOSITE_FRAME_MODE" => "N",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_NAME" => "",
		"NO_WORD_LOGIC" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "50",
		"PATH_TO_USER_PROFILE" => "",
		"RATING_TYPE" => "",
		"RESTART" => "Y",
		"SHOW_RATING" => "N",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "Y",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "Y",
		"arrFILTER" => array(
			0 => "main",
			1 => "iblock_catalog",
			2 => "iblock_content",
		),
		"arrWHERE" => array(
			0 => "iblock_catalog",
			1 => "iblock_content",
		),
		"COMPONENT_TEMPLATE" => "search",
		"arrFILTER_main" => array(
		),
		"arrFILTER_iblock_catalog" => array(
			0 => "21",
		),
		"arrFILTER_iblock_content" => array(
		)
	),
	false
);?>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");