<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
?>
<?php if (!empty($arResult["ITEMS"])): ?>
  <section class="advantages">
    <div class="container">
      <h2 class="title advantages__title"><?=Loc::getMessage('ADVANTAGES')?></h2>
      <ul class="advantages__list">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
          <?php
          $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
          $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
          ?>
          <li class="advantages__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="advantages__image">
              <svg class="advantages__svg">
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#<?=$arItem['PROPERTIES']['SVG_CODE']['VALUE']?>"></use>
              </svg>
            </div>
            <div class="advantages__text">
              <span class="advantages__span"><?=$arItem['NAME']?></span>
              <p class="advantages__descr"><?=$arItem['~PREVIEW_TEXT']?></p>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
      <a class="btn advantages__btn" href="#" onclick="togglePopup('.js-callback')"><?=Loc::getMessage('GET_CONSULTATION')?></a>
    </div>
  </section>
<?php endif; ?>