<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

echo preg_replace_callback(
  "/#FORM#/is".BX_UTF_PCRE_MODIFIER,
  function ($matches) {
    ob_start();
    require_once ('form.php');
    $retrunStr = @ob_get_contents();
    ob_get_clean();
    return $retrunStr;
  },
  $arResult["CACHED_TPL"]);