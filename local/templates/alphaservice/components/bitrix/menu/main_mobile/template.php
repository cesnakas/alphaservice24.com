<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
  <ul>
  <?php
  $previousLevel = 0;
foreach ($arResult

  as $arItem): ?>

  <?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
    <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
  <?php endif ?>

  <?php if ($arItem["IS_PARENT"]): ?>
    <?php if ($arItem["DEPTH_LEVEL"] == 1): ?>
    <li class="js-menu-sub-mb menu-item menu-sub-title">
      <a href="#"><?=$arItem["TEXT"]?></a>
      <ul class="menu-sub-items">
    <?php else: ?>
      <li>
      <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
      <ul>
    <?php endif ?>

  <?php else: ?>
    <?php if ($arItem["DEPTH_LEVEL"] == 1): ?>
      <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
    <?php else: ?>
      <li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
    <?php endif ?>
  <?php endif ?>

  <?php $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

<?php endforeach ?>

  <?php if ($previousLevel > 1)://close last item tags?>
    <?=str_repeat("</ul></li>", ($previousLevel - 1));?>
  <?php endif ?>

  </ul>
<?php endif ?>