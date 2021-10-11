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
<section class="tariffs">
  <div class="container">
    <h2 class="title tariffs__title">
      Выберите тариф Битрикс24
    </h2>

    <div class="tariffs__text">
      <p>Покупать тариф у нас выгодно, т.к. мы  осуществляем помощь в выборе продукта и интеграции исходя из ваших потребностей и бюджета.</p>
    </div>

    <div class="products">
      <ul class="products__list">
        <?php foreach($arResult["ITEMS"] as $arItem):?>
          <?php
          $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
          $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
          ?>
          <li class="products__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <article class="product">
              <div class="product__image">
                <img class="product__img" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['NAME']?>">
              </div>
              <h3 class="product__title"><?=$arItem['NAME']?></h3>
              <ul class="product__list">
                <?php foreach($arItem['PROPERTIES']['UF_DESCRIPTION']['VALUE'] as $val):?>
                  <li class="product__item" style="<?=($val == ' ') ? 'display: block; height: 20px;' : ''?>"><?=$val?></li>
                <?php endforeach;?>
              </ul>
              <span class="product__price"><?=$arItem['PROPERTIES']['UF_PRICE']['VALUE']?></span>
              <a class="btn product__btn product__btn--white js-button-order<?=($arItem['IBLOCK_SECTION_ID'] == 99) ? '-self' : ''?>" href="#" onclick="togglePopup('.custom-order')">
                Заказать
              </a>
            </article>
          </li>
        <?php endforeach;?>
      </ul>
    </div>
  </div>
</section>