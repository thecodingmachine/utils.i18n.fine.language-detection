<?php 
/*
 * Copyright (c) 2012 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */
namespace Mouf\Utils\I18n\Fine;

use Mouf\Utils\Value\ValueInterface;

/**
 * Turns a languageDetection into a valueInterface
 * 
 * @author Kevin Nguyen
 * @Component
 */
class LanguageDetectionValue implements ValueInterface {
	
	/**
	 * Save the language code
	 * @var LanguageDetectionInterface
	 */
	public $languageDetection = null;
	
	public function val(){
		return $this->languageDetection->getLanguage();
	}
}