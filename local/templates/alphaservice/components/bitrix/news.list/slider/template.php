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
  <section class="top-slider">
    <div class="container">
      <div class="top-slider__list">
        <?php $countSlide = 1;?>
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
          <?php
          $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
          $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
          ?>
          <div class="top-slider__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="top-slider__content">
              <div class="top-slider__box">
                <h1 class="top-slider__title"><?=$arItem['NAME']?></h1>
                <div class="top-slider__text">
                  <p><?=$arItem['~PREVIEW_TEXT']?></p>
                </div>
                <div class="top-slider__buttons">
                  <?php if ($arItem['PROPERTIES']['ORDER_BUTTON']['VALUE_XML_ID'] == 'Y'): ?>
                    <a class="btn top-slider__btn js-button-campaign" href="#" onclick="togglePopup('.js-callback')">
                      <?=Loc::getMessage('ORDER_BUTTON')?>
                    </a>
                  <?php endif; ?>

                  <?php if (!empty($arItem['PROPERTIES']['LINK']['VALUE'])): ?>
                    <a class="btn top-slider__btn--white" href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>">
                      <?=Loc::getMessage('DETAIL_BUTTON')?>
                    </a>
                  <?php endif; ?>
                </div>
              </div>
              <div class="top-slider__image">
                <?php if($countSlide == 1):?>
                  <img class="top-slider__img" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">
                <?php else:?>
                  <img class="top-slider__img lazyload" data-src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">
                <?php endif;?>
              </div>
            </div>
          </div>
          <?php $countSlide++;?>
        <?php endforeach; ?>
      </div>
    </div>

    <svg class="top-slider__bg" width="1920" height="730" viewBox="0 0 1920 730" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 685.951L1.0752e-06 730L1920 452.104L1920 0L0 685.951Z" fill="#E3F1FD"/>
    </svg>
  </section>
<?php endif; ?>