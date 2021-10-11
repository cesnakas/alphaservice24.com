<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="filter news__filter">
  <ul class="filter__list">
    <?php foreach ($arResult['SECTIONS'] as $arSection):?>
      <li class="filter__item">
        <a class="filter__btn" type="button" data-filter=".category-b" href="<?=$arSection['SECTION_PAGE_URL']?>">
          <?=$arSection['NAME']?>
          <svg class="filter__svg">
            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#doc"></use>
          </svg>
          <span class="filter__span"><?=$arSection['ELEMENT_CNT']?></span>
        </a>
      </li>
    <?php endforeach;?>
  </ul>
</div>
