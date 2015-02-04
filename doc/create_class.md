Internationalisation with FINE
==============================

Class creation
---------------

It's possible to create your own language detector to use it.
To make this, you must only implement the interface LanguageDetectionValue. This interface contains only one function. It must be return the locale set on 2 characters or null if the language is not found.
[See this package translation-interface](http://www.mouf-php.com/)[https://mouf-php.com/packages/mouf/utils.i18n.fine.translation-interface]