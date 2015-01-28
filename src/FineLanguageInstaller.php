<?php
namespace Mouf\Utils\I18n\Fine\Language;

use Mouf\Installer\PackageInstallerInterface;
use Mouf\MoufManager;
use Mouf\Actions\InstallUtils;

/**
 * A logger class that writes messages into the php error_log.
 */
class FineLanguageInstaller implements PackageInstallerInterface
{

    /**
     * (non-PHPdoc)
     * @see \Mouf\Installer\PackageInstallerInterface::install()
     */
    public static function install(MoufManager $moufManager)
    {
		//language detection service
		if ($moufManager->instanceExists("fineCascadingTranslator")) {
			$defaultLanguageDetection = $moufManager->getInstanceDescriptor("fineCascadingTranslator");
		} else {
			$fixedEnglishLanguageDetection = $moufManager->createInstance("Mouf\\Utils\\I18n\\Fine\\FixedLanguageDetection");
			$fixedEnglishLanguageDetection->setName("fixedEnglishLanguageDetection");
			$fixedEnglishLanguageDetection->getProperty("language")->setValue('en');
			
			$defaultLanguageDetection = $moufManager->createInstance("Mouf\\Utils\\I18n\\Fine\\CascadingLanguageDetection");
			$defaultLanguageDetection->setName("cascadingLanguageDetection");
			$defaultLanguageDetection->getProperty("languageDetectionServices")->setValue(array($fixedEnglishLanguageDetection));	
		}
		
		// Let's rewrite the MoufComponents.php file to save the component
		$moufManager->rewriteMouf();
    }
}
