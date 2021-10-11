<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="news">
  <div class="container">
    <h2 class="title news__title">Блог </h2>
    <?php $APPLICATION->IncludeComponent("bitrix:catalog.section.list", "section_blog", Array(
      "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
      "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
      "CACHE_GROUPS" => "Y",	// Учитывать права доступа
      "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
      "CACHE_TYPE" => "A",	// Тип кеширования
      "COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
      "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
      "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
      "IBLOCK_ID" => "18",	// Инфоблок
      "IBLOCK_TYPE" => "content",	// Тип инфоблока
      "SECTION_CODE" => "",	// Код раздела
      "SECTION_FIELDS" => array(	// Поля разделов
        0 => "NAME",
        1 => "",
      ),
      "SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
      "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
      "SECTION_USER_FIELDS" => array(	// Свойства разделов
        0 => "",
        1 => "",
      ),
      "SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
      "TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
      "VIEW_MODE" => "LINE",	// Вид списка подразделов
      "COMPONENT_TEMPLATE" => ".default"
    ),
      false
    );?>
    <ul class="news__list" id="news">
      <?php foreach($arResult["ITEMS"] as $arItem):?>
        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <li class="news__item mix category-a" data-order="1" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
          <article class="novelty">
            <a class="novelty__link" href="<?=$arItem['DETAIL_PAGE_URL']?>">
              <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="novelty__img" alt="<?=$arItem['NAME']?>">
            </a>
            <a class="novelty__link" href="<?=$arItem['DETAIL_PAGE_URL']?>">
              <h3 class="novelty__title">
                <?=$arItem['NAME']?>
              </h3>
            </a>
            <?php
            $date = (!empty($arItem['ACTIVE_FROM'])) ? $arItem['ACTIVE_FROM'] : $arItem['DATE_CREATE'];
            $dateObject = new DateTime($date);
            ?>
            <time class="novelty__date" datetime="<?=$dateObject->format('d.m.Y')?>"><?=$dateObject->format('d.m.Y')?></time>
          </article>
        </li>
      <?php endforeach;?>
    </ul>
  </div>
</section>
<?php if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
  <br /><?=$arResult["NAV_STRING"]?>
<?php endif;?>