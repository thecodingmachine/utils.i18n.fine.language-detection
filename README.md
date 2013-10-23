Internationalisation with FINE
==============================

Language detection is a PHP internationalisation package, it depends of translation-interface.
This package contain many class to return a language select for internationalisation.

It's could be with :
	Browser detection,
	fix language,
	data set in session,
	a link between domain name and language
	a cascading of many solutions.
	
The language can be used to translate message in fin or whatever.

A list of packages using those interfaces:

- [Translation common](http://mouf-php.com/packages/mouf/utils.i18n.common/README.md): Common translation package for the Mouf framework.
- [Translation-file](http://mouf-php.com/packages/mouf/utils.i18n.translation-file/README.md): Translation stored in file package for the Mouf framework.


Installing Fine
---------------

Detection language is a Mouf package. It means you can easily install it using Mouf installer, or simply by adding a composer dependency on your project.

By default the installation create a BrowserLanguageDetection instance named defaultLanguageDetection. You can add or change this instance with the Mouf interface.

Language format
---------------

The language format is on 2 letters. If the language is not found this return null.

Create instance
---------------

This is an example to create cascading instance.
After a click on Instances -> Create a new instance, you can create a cascading instance.
IMAGE

After add a new instance or your instance of language detection.
IMAGE

Your language detection is ready ! 