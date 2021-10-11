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
  <section class="partners">
    <div class="container">
      <h2 class="title partners__title"><?=Loc::getMessage('REVIEWS')?></h2>
      <div class="partners__inner">
        <?php $count = 1; ?>
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
          <?php
          $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
          $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
          ?>
          <?php if (($count % 2) == 1): ?>
            <div class="partners__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
              <div class="partners__logo"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>" width="58px" height="37px" /></div>
              <blockquote class="partners__blockquote">
                <?=$arItem['~PREVIEW_TEXT']?>
                <cite class="partners__cite">
                  <?=$arItem['PROPERTIES']['JOB_POSITION']['VALUE']?>
                </cite>
                <?php
                $date = $arItem['PROPERTIES']['DATE']['VALUE'];
                $dateObject = new DateTime($date);
                ?>
                <time class="partners__date" datetime="<?=$dateObject->format('d.m.Y')?>">
                  <?=$dateObject->format('d.m.Y')?>
                </time>
              </blockquote>
            </div>
          <?php else: ?>
            <div class="partners__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
              <blockquote class="partners__blockquote">
                <?=$arItem['~PREVIEW_TEXT']?>
                <cite class="partners__cite">
                  <?=$arItem['PROPERTIES']['JOB_POSITION']['VALUE']?>
                </cite>
                <?php
                $date = $arItem['PROPERTIES']['DATE']['VALUE'];
                $dateObject = new DateTime($date);
                ?>
                <time class="partners__date" datetime="<?=$dateObject->format('d.m.Y')?>">
                  <?=$dateObject->format('d.m.Y')?>
                </time>
              </blockquote>
              <div class="partners__logo partners__logo--indent"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>" width="58px" height="37px />
              </div>
            </div>
          <?php endif; ?>
          <?php $count++ ?>
        <?php endforeach; ?>
      </div>
    </div>
    <svg class="partners__bg" width="1166" height="393" viewBox="0 0 1166 393" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M1166 0.201172V392.201H0L1166 0.201172Z" fill="#E3F1FD"/>
    </svg>
  </section>
<?php endif; ?>



