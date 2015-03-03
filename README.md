Internationalisation with FINE
==============================
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/thecodingmachine/utils.i18n.fine.language-detection/badges/quality-score.png?b=4.0)](https://scrutinizer-ci.com/g/thecodingmachine/utils.i18n.fine.language-detection/?branch=4.0)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/5b86e6ec-bf3d-4438-b0c9-682c04e4eaf3/small.png)](https://insight.sensiolabs.com/projects/5b86e6ec-bf3d-4438-b0c9-682c04e4eaf3)

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

Language format
---------------

The language format is on 2 letters. If the language is not found this return null.
