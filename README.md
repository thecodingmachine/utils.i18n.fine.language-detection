Internationalisation with FINE
==============================
![Scrutinizer](https://scrutinizer-ci.com/g/thecodingmachine/utils.i18n.fine.language-detection/badges/quality-score.png?b=4.0)

If you are not familiar with Fine, you should stop reading **right now**! Please [get started with the main presentation](http://mouf-php.com/packages/mouf/utils.i18n.fine.translation-interface/README.md).

Language detection is a PHP internationalisation package, it depends of translation-interface package.
This package contains many class to return the selected language for internationalisation.

It's could be with :
- Browser detection,
- fix language,
- data set in session,
- a link between domain name and language
- a cascading of many solutions.
	
The language can be used to translate message in fine or whatever.

Dependencies
------------

Fine comes as a *Composer* package and requires the "Mouf" framework to run.
The first step is therefore to [install Mouf](http://www.mouf-php.com/).

Once Mouf is installed, you can process to the Fine installation.

Install Fine
--------------

This package is automatically added with the utils.i18n.fine.common
Edit your *composer.json* file, and add a dependency on *mouf/utils.i18n.fine.langauge-detection.

A minimal *composer.json* file might look like this:
```
	{
	    "require": {
	        "mouf/mouf": "~2.0",
	        "mouf/utils.i18n.fine.language-detection": "4.0.*"
	    },
	    "autoload": {
	        "psr-0": {
	            "Test": "src/"
	        }
	    },
	    "minimum-stability": "dev"
	}
```
As explained above, Fine is a package of the Mouf framework. Mouf allows you (amoung other things) to visualy "build" your project's dependencies and instances.

To install the dependency, run
	php composer.phar install

After this you can [create an instance](doc/install.md)

Language format
---------------

The language format is on 2 letters. If the language is not found this return null.

Implement your own language detection
-------------------------------------

Please read this [documentation](doc/create_class.md) or the [translation interface package](https://mouf-php.com/packages/mouf/utils.i18n.fine.translation-interface/doc/implementation.md)

