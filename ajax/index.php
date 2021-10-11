<?php
use Bitrix\Main\Application,
    Bitrix\Main\Loader,
    Bitrix\Main\Web\PostDecodeFilter;

define('STOP_STATISTICS', true);
define('NO_AGENT_CHECK', true);
define("NO_KEEP_STATISTIC", true);
define("NO_AGENT_STATISTIC","Y");

$siteId = isset($_REQUEST['SITE_ID']) && is_string($_REQUEST['SITE_ID']) ? $_REQUEST['SITE_ID'] : '';
$siteId = substr(preg_replace('/[^a-z0-9_]/i', '', $siteId), 0, 2);
if (!empty($siteId) && is_string($siteId)) {
  define('SITE_ID', $siteId);
}

require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

$request = Application::getInstance()->getContext()->getRequest();
$request->addFilter(new PostDecodeFilter);

if (!check_bitrix_sessid() || !$request->isPost()) {
  die();
}

if($request->get('event') == 'contactform') {
  parse_str($request->get('props'), $props);

  $name = htmlspecialcharsbx($props['username']);
  $phone = htmlspecialcharsbx($props['userphone']);
  $email = htmlspecialcharsbx($props['useremail']);
  $comment = htmlspecialcharsbx($props['comment']);

  if (Loader::includeModule("form")) {
    $arValues = [
      "form_text_23" => $name,
      "form_text_27" => $phone,
      "form_email_26" => $email,
      "form_textarea_28" => $comment
    ];
    if ($RESULT_ID = CFormResult::Add(CONTACT_FORM_ID, $arValues)) {
      CFormResult::Mail($RESULT_ID);
    }
  } else {

  }
} elseif($request->get('event') == 'buyLicense') {
  parse_str($request->get('props'), $props);

  $name = htmlspecialcharsbx($props['username']);
  $phone = htmlspecialcharsbx($props['userphone']);
  $email = htmlspecialcharsbx($props['useremail']);
  $comment = htmlspecialcharsbx($props['usertextarea']);
  $license = htmlspecialcharsbx($props['userselect']);

  if (Loader::includeModule("form")) {
    $arValues = [
      "form_text_1" => $name,
      "form_text_30" => $phone,
      "form_email_29" => $email,
      "form_textarea_31" => $comment,
      "form_dropdown_LICENSE" => $license,
    ];
    if ($RESULT_ID = CFormResult::Add(LICENSE_FORM_ID, $arValues)) {
      CFormResult::Mail($RESULT_ID);
    }
  } else {

  }


//  if (!empty($request->get('elementID'))) {
//    $elementId = intval($request->get('elementID'));
//  }
//
//  if($elementId > 0) {
//    $arResult = [];
//
//    $rsFiles = CMeeting::GetFiles($elementId);
//    while ($arFiles = $rsFiles->Fetch()) {
//      $arResult[] = $arFiles['FILE_ID'];
//    }
//
//    if(!empty($arResult)) {
//      $result['filename'] = CBoard24Functions::createZip($arResult, 'meeting'.$elementId);
//    }
//  }
//
//  echo json_encode($result);
} elseif($request->get('event') == 'setCity') {
  $cityId = intval($request->get('cityId'));
  if($cityId > 0) {
    setCityName($cityId);
  }
}