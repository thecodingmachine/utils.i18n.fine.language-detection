<?php 
/*
 * Copyright (c) 2012 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */
namespace Mouf\Utils\I18n\Fine;

use Mouf\Utils\I18n\LanguageDetectionInterface;

/**
 * Use cascading language detection if you want to use several language detection patterns
 * in your application.
 * The CascadingLanguageDetection will try to use the first language detection service.
 * If this service manages to return a language, it will use it.
 * Instead, if this service returns "default" for a language, it will try to use the
 * second language service, etc... 
 * 
 * @author David Negrier
 * @Component
 */
class CascadingLanguageDetection implements LanguageDetectionInterface {
	
	/**
	 * The list of language detection services to use.
	 * The order is important, as they will be tried from top to bottom.
	 * As soon as one language detection service manages to find a language,
	 * the process will stop.
	 * 
	 * @Property
	 * @Compulsory
	 * @var array<LanguageDetectionInterface>
	 */
	public $languageDetectionServices = array();
	
	/**
	 * Returns the language to use considering all the LanguageDetection services configured.
	 * If no language found this return null
	 * 
	 * @see plugins/utils/i18n/fine/2.1/language/LanguageDetectionInterface::getLanguage()
	 * @return string|null
	 */
	public function getLanguage() {
		foreach ($this->languageDetectionServices as $languageDetectionService) {
			/* @var languageDetectionService LanguageDetectionInterface */
			$language = $languageDetectionService->getLanguage();
			if ($language === null || empty($language)) {
				continue;
			} else {
				return $language;
			}
		}
		return null;
	}

}