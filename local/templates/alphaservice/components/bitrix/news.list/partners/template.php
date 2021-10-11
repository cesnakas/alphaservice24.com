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
  <section class="clients">
    <div class="container">
      <h2 class="title clients__title"><?=Loc::getMessage('PARTNERS')?></h2>
      <ul class="clients__list">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
          <?php
          $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
          $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
          ?>
          <li class="clients__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="clients__image">
              <img class="clients__img" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>" width="212px" height="104px">
            </div>
          </li>
        <?php endforeach;?>
      </ul>
    </div>
    <svg class="clients__bg" width="1920" height="262" viewBox="0 0 1920 262" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 0L8.01821e-05 262L1920 195.312V151.803L0 0Z" fill="#E3F1FD"/>
    </svg>
  </section>
<?php endif; ?>



