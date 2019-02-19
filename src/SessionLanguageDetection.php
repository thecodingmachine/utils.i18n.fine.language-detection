<?php
/*
 * Copyright (c) 2012-2015 Marc TEYSSIER
 *
 * See the file LICENSE.txt for copying permission.
 */
namespace Mouf\Utils\I18n\Fine\Language;

use Mouf\Utils\I18n\Fine\LanguageDetectionInterface;

/**
 * Use fixed language detection if you want to always use the same language in your application.
 * The FixedLanguageDetection class is a utility class that always returns the same
 * language.
 * Use the setLanguage method to set the language it will return.
 *
 * @author Marc TEYSSIER
 */
class SessionLanguageDetection implements LanguageDetectionInterface
{

    /**
     * Returns the language to use.
     *
     * @see \Mouf\Utils\I18n\Fine\LanguageDetectionInterface::getLanguage()
     * @return string|null
     */
    public function getLanguage()
    {
        if (!isset($_SESSION['_fine_I18n_language'])){
            return null;
        }
        return $_SESSION['_fine_I18n_language'];
    }

    /**
     * Sets the language to use.
     *
     * @param string $language
     */
    public function setLanguage($language)
    {
        $_SESSION['_fine_I18n_language'] = $language;
    }
}
