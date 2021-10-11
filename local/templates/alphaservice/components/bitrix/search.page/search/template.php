<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

use Bitrix\Main\Localization\Loc;
?>
<section>
  <div class="container">
    <?php
    $APPLICATION->IncludeComponent(
      "bitrix:breadcrumb",
      ".default",
      array(
        "PATH" => "",
        "SITE_ID" => "s1",
        "START_FROM" => "0",
        "COMPONENT_TEMPLATE" => ".default"
      ),
      false
    );?>
  </div>
</section>
<section>
  <div class="search-container">
    <div class="search-title-page">
      <h1><?php echo Loc::getMessage('SEARCH');?></h1>
    </div>
    <span class="search-count-result"><?php echo Loc::getMessage('ERROR_MODULE_NOT_FOUND', ["#COUNT_SEARCH#" => count($arResult['SEARCH'])]);?></span>

    <form id="pageSearch" role="search" action="" method="get">
      <svg width="19" height="19" viewBox="0 0 19 19" fill="#FFF" xmlns="http://www.w3.org/2000/svg">
        <path d="M8 16C9.77498 15.9996 11.4988 15.4054 12.897 14.312L17.293 18.708L18.707 17.294L14.311 12.898C15.405 11.4997 15.9996 9.77544 16 8C16 3.589 12.411 0 8 0C3.589 0 0 3.589 0 8C0 12.411 3.589 16 8 16ZM8 2C11.309 2 14 4.691 14 8C14 11.309 11.309 14 8 14C4.691 14 2 11.309 2 8C2 4.691 4.691 2 8 2Z" fill="#4F4F4F"/>
      </svg>
      <label for="pageSearchInput"></label>
      <input type="search" name="q" id="pageSearchInput" placeholder="Введите запрос" value="<?=$arResult["REQUEST"]["QUERY"]?>">
      <button type="submit" class="btn" value="<?php echo Loc::getMessage('SEARCH_GO');?>"><?php echo Loc::getMessage('SEARCH');?></button>
      <input type="hidden" name="how" value="<?php echo $arResult["REQUEST"]["HOW"] == "d" ? "d" : "r" ?>"/>
    </form>
    <hr/>
    <?php if ($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false): ?>
    <?php elseif (count($arResult["SEARCH"]) > 0): ?>
    <ul>
      <?php foreach ($arResult["SEARCH"] as $arItem): ?>
        <li>
          <a href="<?php echo $arItem["URL"] ?>"><?php echo $arItem["TITLE_FORMATED"] ?></a>
          <p><?php echo $arItem["BODY_FORMATED"] ?></p>
        </li>
      <?php endforeach; ?>
      <?php if ($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"] ?>
    <?php else: ?>
      <?php echo Loc::getMessage('SEARCH_NOTHING_TO_FOUND');?>
    <?php endif; ?>
    </ul>

    <div class="blog-page__but">
      <a class="btn blog-page__btn--white" href="/">
        <svg class="case-page__arrow">
          <use xlink:href="/local/templates/alphaservice/images/sprite.svg#arrow-btn"></use>
        </svg>
        <?php echo Loc::getMessage('BACK');?> </a>
    </div>
  </div>
</section>