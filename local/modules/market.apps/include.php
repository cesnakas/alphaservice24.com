<?php
use Bitrix\Main\Loader;

IncludeModuleLangFile(__FILE__);

$arClasses = [
  "\Market\Apps\CApplication" => "lib/classes/application.php",
  "\Market\Apps\CAuth" => "lib/classes/auth.php",
  "\Market\Apps\CHelper" => "lib/classes/helper.php",
];

Loader::registerAutoLoadClasses("market.apps", $arClasses);