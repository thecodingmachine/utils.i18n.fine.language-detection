<?php 
/*
 * Copyright (c) 2012 David Negrier
 * 
 * See the file LICENSE.txt for copying permission.
 */
namespace Mouf\Utils\I18n\Fine;

use Mouf\Utils\I18n\LanguageDetectionInterface;

/**
 * Use a language code for each domain you
 * 
 * @author Marc Teyssier
 * @Component
 */
class DomainLanguageDetection implements LanguageDetectionInterface {
	
	private $domains = array();
	
	/**
	 * Returns the language used for the domain name.
	 * Check if the value exit in keys array. If this value doesn't exist, the function return null.
	 * 
	 * @see plugins/utils/i18n/fine/2.1/language/LanguageDetectionInterface::getLanguage()
	 * @return string Language code store in array
	 */
	public function getLanguage() {
		if(isset($_SERVER["SERVER_NAME"])) {
			$domain = $_SERVER["SERVER_NAME"];
			// Evol it's false, check subdomain www or without www
			if(isset($this->domains[$domain])) {
				return $this->domains[$domain];
			}
		}
		return null;
	}
	
	/**
	 * Associate domain names with the code translation.<br />
	 * Your domain name is after the http:// and with is extension like www.thecodingmachine.com<br />
	 * The language code is on 2 characters like en, fr, de, us ... Write only one code.
	 * 
	 * @Property
	 * @param array<string, string> $domains Key is domain name, value is translation code
	 */
	public function setDomains($domains) {
		$this->domains = $domains;
	}
}