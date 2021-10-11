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

ob_start();

?>

<h2 class="title case-page__title"><?=$arResult['~NAME']?></h2>
<?php if(!empty($arResult['DETAIL_PICTURE']['SRC'])):?>
  <div class="case-page__bg" style="background-image: url('<?=$arResult['DETAIL_PICTURE']['SRC']?>');"></div>
<?php endif;?>

<?=$arResult['~DETAIL_TEXT']?>

<div class="case-page__button">
<a class="btn case-page__btn--white" href="<?=$arResult['LIST_PAGE_URL']?>">
  <svg class="case-page__arrow">
    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/images/sprite.svg#arrow-btn"></use>
  </svg>
  <?=Loc::getMessage('CANCEL')?>
</a>
</div>

<?php
$this->__component->arResult["CACHED_TPL"] = @ob_get_contents();
ob_get_clean();