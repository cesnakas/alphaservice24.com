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
  <section class="services">
    <div class="container">
      <h2 class="title services__title"><?=Loc::getMessage('WE_DOING')?></h2>
      <div class="services__inner">
        <div class="services__image"></div>
        <div class="services__text">
          <ul class="services__list">
            <?php foreach ($arResult["ITEMS"] as $arItem): ?>
              <?php
              $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
              $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
              ?>
              <li class="services__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <svg class="services__svg">
                  <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#v"></use>
                </svg>
                <p><?=$arItem['NAME']?></p>
              </li>
            <?php endforeach; ?>
          </ul>

          <a class="btn services__btn" href="#">
            <?=Loc::getMessage('MORE')?>
          </a>
        </div>
      </div>
    </div>
    <svg class="services__bg" width="559" height="300" viewBox="0 0 559 300" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M566 -0.000976562L0 118.289L566 299.999V-0.000976562Z" fill="#E3F1FD"/>
    </svg>
  </section>
<?php endif; ?>