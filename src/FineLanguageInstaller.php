<?php
namespace Mouf\Utils\I18n\Fine\Language;

use Mouf\Installer\PackageInstallerInterface;
use Mouf\MoufManager;

/**
 * Installer for language detection package. This create a cascadingLanguageDetection and bind it a fixed language detection.
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
        if (!$moufManager->instanceExists("cascadingLanguageDetection")) {
            $fixedEnglishLanguageDetection = $moufManager->createInstance("Mouf\\Utils\\I18n\\Fine\\Language\\FixedLanguageDetection");
            $fixedEnglishLanguageDetection->setName("fixedEnglishLanguageDetection");
            $fixedEnglishLanguageDetection->getProperty("language")->setValue('en');

            $defaultLanguageDetection = $moufManager->createInstance("Mouf\\Utils\\I18n\\Fine\\Language\\CascadingLanguageDetection");
            $defaultLanguageDetection->setName("cascadingLanguageDetection");
            $defaultLanguageDetection->getProperty("languageDetectionServices")->setValue(array($fixedEnglishLanguageDetection));

            // Let's rewrite the MoufComponents.php file to save the component
            $moufManager->rewriteMouf();
        }
    }
}
