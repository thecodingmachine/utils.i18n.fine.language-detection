<?php 
/*
 * Copyright (c) 2012-2015 Marc TEYSSIER
 * 
 * See the file LICENSE.txt for copying permission.
 */
namespace Mouf\Utils\I18n\Fine\Language;

use Mouf\Utils\Value\ValueInterface;

/**
 * Turns a languageDetection into a valueInterface
 * 
 * @author Marc TEYSSIER
 * @Component
 */
class LanguageDetectionValue implements ValueInterface {
	
	/**
	 * Save the language code
	 * @var LanguageDetectionInterface
	 */
	public $languageDetection = null;
	
	/**
	 * (non-PHPdoc)
	 * @see \Mouf\Utils\Value\ValueInterface::val()
	 * @return the locale set on 2 characters or null
	 */
	public function val(){
		return $this->languageDetection->getLanguage();
	}
}