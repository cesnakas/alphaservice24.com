<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
  <ul class="menu__list">
  <?php
  $previousLevel = 0;
  foreach ($arResult as $arItem): ?>

    <?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
      <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
    <?php endif ?>

    <?php if ($arItem["IS_PARENT"]): ?>
    <?php if ($arItem["DEPTH_LEVEL"] == 1): ?>
    <li class="menu__item">
    <a class="menu__link" href="<?=$arItem["LINK"]?>">
      <?=$arItem["TEXT"]?>
      <svg class="menu__svg" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 0.5L6.2381 5.5L11 0.5" stroke="#4F4F4F"/>
      </svg>
    </a>
    <ul class="menu-services">
    <?php else: ?>
    <li class="menu-services__item">
    <a class="menu-services__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
    <ul>
    <?php endif ?>

    <?php else: ?>
      <?php if ($arItem["DEPTH_LEVEL"] == 1): ?>
        <li class="menu__item"><a href="<?=$arItem["LINK"]?>" class="menu__link"><?=$arItem["TEXT"]?></a></li>
      <?php else: ?>
        <li class="menu-services__item"><a class="menu-services__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
      <?php endif ?>
    <?php endif ?>

    <?php $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

  <?php endforeach ?>

  <?php if ($previousLevel > 1)://close last item tags?>
    <?=str_repeat("</ul></li>", ($previousLevel - 1));?>
  <?php endif ?>

  </ul>
<?php endif ?>