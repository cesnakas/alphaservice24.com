<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
  <ul class="menu-list">
  <?php
  $previousLevel = 0;
foreach ($arResult

  as $arItem):?>

  <?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
    <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
  <?php endif ?>

  <?php if ($arItem["IS_PARENT"]): ?>
  <?php if ($arItem["DEPTH_LEVEL"] == 1): ?>
  <li class="menu-item menu-sub-title">
  <a class="<?php if($arItem['SELECTED']) echo 'menu-item-active'?>">
    <?=$arItem["TEXT"]?>
  </a>
  <ul class="menu-sub-items">
  <?php else: ?>
  <li>
  <a href="<?=$arItem["LINK"]?>" class="<?php if($arItem['SELECTED']) echo 'menu-item-active'?>"><?=$arItem["TEXT"]?></a>
  <ul>
  <?php endif ?>

  <?php else: ?>
    <?php if ($arItem["DEPTH_LEVEL"] == 1): ?>
      <li><a href="<?=$arItem["LINK"]?>" class="<?php if($arItem['SELECTED'] && $arItem['PARAMS']['STOCK'] == 'Y') echo 'menu-item-red-active'; elseif($arItem['SELECTED']) echo 'menu-item-active';?> <?php if($arItem['PARAMS']['STOCK'] == 'Y') echo 'menu-item-red'?>"><?=$arItem["TEXT"]?></a></li>
    <?php else: ?>
      <li><a href="<?=$arItem["LINK"]?>" class="<?php if($arItem['SELECTED'] && $arItem['PARAMS']['STOCK'] == 'Y') echo 'menu-item-red-active'; elseif($arItem['SELECTED']) echo 'menu-item-active'?> <?php if($arItem['PARAMS']['STOCK'] == 'Y') echo 'menu-item-red'?>"><?=$arItem["TEXT"]?></a></li>
    <?php endif ?>
  <?php endif ?>

  <?php $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

<?php endforeach ?>

  <?php if ($previousLevel > 1)://close last item tags?>
    <?=str_repeat("</ul></li>", ($previousLevel - 1));?>
  <?php endif ?>

  </ul>
<?php endif ?>