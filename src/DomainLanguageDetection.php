<?php 
/*
 * Copyright (c) 2012-2015 Marc TEYSSIER
 * 
 * See the file LICENSE.txt for copying permission.
 */
namespace Mouf\Utils\I18n\Fine\Language;

use Mouf\Utils\I18n\Fine\LanguageDetectionInterface;

/**
 * Use to force the language code for domains
 * 
 * @author Marc TEYSSIER
 */
class DomainLanguageDetection implements LanguageDetectionInterface {
	
	/**
	 * Save the list of domains to language
	 * @var array<string, string>
	 */
	private $domains = array();
	
	/**
	 * Returns the language used for the domain name.
	 * Check if the value exit in keys array. If this value doesn't exist, the function return null.
	 * 
	 * @see \Mouf\Utils\I18n\Fine\LanguageDetectionInterface::getLanguage()
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
	public function setDomains(array $domains) {
		$this->domains = $domains;
	}
}
