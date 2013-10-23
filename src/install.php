<?php
require_once __DIR__."/../../../autoload.php";
use Mouf\Actions\InstallUtils;
use Mouf\MoufManager;

// First, let's request the install utilities


// Let's init Mouf

InstallUtils::init(InstallUtils::$INIT_APP);

// Let's create the instance
$moufManager = MoufManager::getMoufManager();

//language detection service
if ($moufManager->instanceExists("defaultLanguageDetection")) {
	$defaultLanguageDetection = $moufManager->getInstanceDescriptor("defaultLanguageDetection");
} else {
	$defaultLanguageDetection = $moufManager->createInstance("Mouf\\Utils\\I18n\\Fine\\BrowserLanguageDetection");
	$defaultLanguageDetection->setName("defaultLanguageDetection");
}

// Let's rewrite the MoufComponents.php file to save the component
$moufManager->rewriteMouf();

// Finally, let's continue the install
InstallUtils::continueInstall();