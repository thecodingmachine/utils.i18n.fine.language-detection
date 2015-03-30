<?php
/*
 * Copyright (c) 2012-2015 Marc TEYSSIER
 *
 * See the file LICENSE.txt for copying permission.
 */
namespace Mouf\Utils\I18n\Fine\Language;

use Mouf\Utils\I18n\Fine\LanguageDetectionInterface;

/**
 * Detect the browser language
 *
 * @author Marc TEYSSIER
 */
class BrowserLanguageDetection implements LanguageDetectionInterface
{

    /**
     * Save the language code
     * @var string
     */
    private $language = null;

    /**
     * Returns the language used for the users browser.
     * The code is stored in a variable to store whether the function is called twice
     *
     * @see \Mouf\Utils\I18n\Fine\LanguageDetectionInterface::getLanguage()
     */
    public function getLanguage()
    {
        if (!$this->language) {
            $langs = $this->getBrowserLanguage();
            // creating output list
            $accepted = array();
            foreach ($langs as $lang) {
                $accepted[] = $this->extractDataOfLanguage($lang);
            }
            // sorting the list by coefficient desc
            krsort($accepted);
            if (isset($accepted[0])) {
                $this->language = $accepted[0]['code'];
            }
        }

        return $this->language;
    }

    /**
     * Get all the language detects on the browser
     * @return array<string>
     */
    private function getBrowserLanguage()
    {
        // getting http instruction if not provided
        $str = (isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? $_SERVER['HTTP_ACCEPT_LANGUAGE'] : "");
        // exploding accepted languages
        $langs = explode(',', $str);

        return $langs;
    }

    /**
     * Get the language browser data
     * @param  string        $lang
     * @return array<string, string>
     */
    private function extractDataOfLanguage($lang)
    {
        $found = [];
        // parsing language preference instructions
        // 2_digit_code[-longer_code][;q=coefficient]
        preg_match('/([a-z]{1,2})(-([a-z0-9]+))?(;q=([0-9\.]+))?/', $lang, $found);
        // 2 digit lang code
        $code = isset($found[1]) ? $found[1] : null;
        // lang code complement
        $morecode = isset($found[3]) ? $found[3] : null;
        // full lang code
        $fullcode = $morecode ? $code.'-'.$morecode : $code;
        // coefficient
        $coef = sprintf('%3.1f', isset($found[5]) ? $found[5] : '1');
        // for sorting by coefficient
        // adding
        return array('code' => $code,'coef' => $coef,'morecode' => $morecode,'fullcode' => $fullcode);
    }
}
