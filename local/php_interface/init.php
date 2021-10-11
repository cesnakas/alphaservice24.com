<?php
if (file_exists($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/constants.php')) {
  require_once($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/constants.php');
}

if (file_exists($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/classes/CLangDetect.php')) {
  require_once($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/classes/CLangDetect.php');
}

if (file_exists($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/events.php')) {
  require_once($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/events.php');
}

if (file_exists($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/functions.php')) {
  require_once($_SERVER['DOCUMENT_ROOT'].'/local/php_interface/functions.php');
}