<?php
IncludeModuleLangFile(__FILE__);

use Bitrix\Main\Localization\Loc,
  Bitrix\Main\Application;

if(class_exists("market_apps")) return;

class market_apps extends CModule
{
  var $MODULE_ID = 'market.apps';
  var $MODULE_VERSION;
  var $MODULE_VERSION_DATE;
  var $MODULE_NAME;
  var $MODULE_DESCRIPTION;
  var $PARTNER_NAME;
  var $PARTNER_URI;

  public function __construct()
  {
    $this->initModuleId();
    $this->initModuleVersionDefinition();
    $this->initModuleName();
    $this->initModuleDescription();
    $this->initModulePartnerInfo();
  }

  protected function initModuleId()
  {
    $this->MODULE_ID = "market.apps";
  }

  protected function initModuleVersionDefinition()
  {
    $versionDefinition = $this->getModuleVersionDefinition();
    $this->MODULE_VERSION = $versionDefinition['VERSION'];
    $this->MODULE_VERSION_DATE = $versionDefinition['VERSION_DATE'];
  }

  protected function getDefaultVersionDefinition(): array
  {
    return [
      'VERSION' => '1.0.0',
      'VERSION_DATE' => '2021-08-01 00:00:00'
    ];
  }

  protected function getModuleVersionDefinition(): array
  {
    $arModuleVersion = [];
    include __DIR__ . '/version.php';

    $defaultVersionDefinition = $this->getDefaultVersionDefinition();
    if (!is_array($arModuleVersion) || empty($arModuleVersion)) {
      return $defaultVersionDefinition;
    }

    $version = $arModuleVersion['VERSION'] ?? $defaultVersionDefinition['VERSION'];
    $versionDate = $arModuleVersion['VERSION_DATE'] ?? $defaultVersionDefinition['VERSION_DATE'];

    return [
      'VERSION' => $version,
      'VERSION_DATE' => $versionDate
    ];
  }

  protected function initModuleName()
  {
    $this->MODULE_NAME = Loc::getMessage("MARKET_APPS_MODULE_NAME");
  }

  protected function initModuleDescription()
  {
    $this->MODULE_DESCRIPTION = Loc::getMessage("MARKET_APPS_MODULE_DESCRIPTION");
  }

  protected function initModulePartnerInfo()
  {
    $this->PARTNER_NAME = Loc::getMessage('MARKET_APPS_PARTNER_NAME');
    $this->PARTNER_URI = Loc::getMessage('MARKET_APPS_PARTNER_SITE');
  }

  public function DoInstall(): bool
  {
    global $APPLICATION, $step;

    $errors = [];

    if (!empty($errors)) {
      $resultError = '';
      foreach ($errors as $error) {
        $resultError .= $error . "<br />";
      }

      if (!empty($resultError)) {
        $APPLICATION->ThrowException($resultError);
        return false;
      }
    }

    $step = IntVal($step);

    if (!$this->InstallDB()) {
      return false;
    }

    if (!$this->InstallFiles()) {
      $this->UninstallDB();
      return false;
    }

    RegisterModule($this->MODULE_ID);

    if (!$this->InstallEvents()) {
      $this->UninstallDB();
      $this->UninstallFiles();
      return false;
    }

    $APPLICATION->IncludeAdminFile(Loc::getMessage("MARKET_APPS_MODULE_INSTALL_TITLE") . " \"" . Loc::getMessage("MARKET_APPS_MODULE_NAME") . "\"", __DIR__ . "/step.php");

    return true;
  }

  public function DoUninstall(): bool
  {
    global $APPLICATION;
    if (!$this->UnInstallDB()) {
      return false;
    }

    $this->UnInstallEvents();
    $this->UnInstallFiles();

    CAgent::RemoveModuleAgents($this->MODULE_ID);

    UnRegisterModule($this->MODULE_ID);

    $APPLICATION->IncludeAdminFile(Loc::getMessage("MARKET_APPS_MODULE_UNINSTALL_TITLE") . " " . $this->MODULE_ID, Application::getDocumentRoot() . "/bitrix/modules/" . $this->MODULE_ID . "/install/unstep.php");

    return true;
  }

  public function InstallDB(): bool
  {
    return true;
  }

  public function UnInstallDB(): bool
  {
    return true;
  }

  public function InstallEvents(): bool
  {
    return true;
  }

  public function UnInstallEvents(): bool
  {
    return true;
  }

  public function InstallFiles(): bool
  {
    return true;
  }

  public function UnInstallFiles(): bool
  {
    return true;
  }
}