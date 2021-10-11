<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

use Bitrix\Main\Localization\Loc;

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
CIBlockElement::CounterInc($arResult['ID']);
?>
<div class="blog-page__inner blog-page__inner--lg">
  <h2 class="title blog-page__title"><?=$arResult['NAME']?></h2>
  <?php if(!empty($arResult['DETAIL_PICTURE']['SRC'])):?>
  <div class="blog-page__image">
    <img class="blog-page__img" src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['NAME']?>">
  </div>
  <?php endif;?>

  <?=$arResult['~DETAIL_TEXT']?>

  <?php
  $date = (!empty($arResult['ACTIVE_FROM'])) ? $arResult['ACTIVE_FROM'] : $arResult['DATE_CREATE'];
  $dateObject = new DateTime($date);
  ?>
  <time class="blog-page__date" datetime="<?=$dateObject->format('d.m.Y')?>">
    <?=$dateObject->format('d.m.Y')?>
  </time>

  <div class="blog-page__but">
    <a class="btn blog-page__btn--white" href="<?=$arResult['SECTION_URL']?>">
      <svg class="case-page__arrow">
        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#arrow-btn"></use>
      </svg><?=Loc::getMessage('CANCEL')?>
    </a>
  </div>
</div>