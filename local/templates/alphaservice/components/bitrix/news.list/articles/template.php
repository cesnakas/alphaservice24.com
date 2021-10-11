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
  <section class="news">
    <div class="container">
      <h2 class="title news__title"><?=Loc::getMessage('ARTICLES')?></h2>
      <ul class="news__list">
        <?php foreach ($arResult["ITEMS"] as $arItem):?>
          <?php
          $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
          $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
          ?>
          <li class="news__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <article class="novelty">
              <a class="novelty__link" href="<?=$arItem['DETAIL_PAGE_URL']?>">
                <img class="novelty__img lazyload" data-src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>" width="392px" height="250px" />
              </a>
              <a class="novelty__link" href="<?=$arItem['DETAIL_PAGE_URL']?>">
                <h3 class="novelty__title"><?=$arItem['NAME']?></h3>
              </a>
              <?php
              $date = (!empty($arItem['ACTIVE_FROM'])) ? $arItem['ACTIVE_FROM'] : $arItem['DATE_CREATE'];
              $dateObject = new DateTime($date);
              ?>
              <time class="novelty__date" datetime="<?=$dateObject->format('d.m.Y')?>">
                <?=$dateObject->format('d.m.Y')?>
              </time>
            </article>
          </li>
        <?php endforeach;?>
      </ul>

      <!--      <button class="btn news__btn--white" type="button">-->
<!--              --><?php //=Loc::getMessage('WATCH_MORE')?>
      <!--      </button>-->
    </div>
  </section>
<?php endif; ?>



