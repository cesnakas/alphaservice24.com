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
  <div class="blog-page__inner">
    <div class="blog-page__sidebar">
      <span class="blog-page__subtitle">
        <?=Loc::getMessage('TITLE_MENU')?>
      </span>
      <ul class="blog-page__list">
        <?php foreach ($arResult["ITEMS"] as $arItem):?>
          <?php
          $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
          $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
          ?>
          <li class="blog-page__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <a class="blog-page__link" href="<?=$arItem['DETAIL_PAGE_URL']?>">
              <?=$arItem['NAME']?>
            </a>
            <div class="blog-page__box">
              <svg class="blog-page__svg">
                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#eye"></use>
              </svg>
              <span class="blog-page__num"><?=intval($arItem['SHOW_COUNTER'])?></span>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
<?php endif; ?>