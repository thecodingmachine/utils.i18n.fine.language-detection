Installation
============

Installer
---------

The installer in Mouf framework create an instance of CascadingLanguageDetection and add to it the FixedLanguageDetection with the language "en" for english.

Create instance
---------------

##With only a translator

Create an instance of cascadingLanguageDetection "Instances" -> "Create a new instance"
![Fine install screenshot](https://raw.github.com/thecodingmachine/utils.i18n.fine.language-detection/4.0/doc/images/1_create_instance.png)

Click on "add an instance" and drag and drop an instance of LanguageDetection in the array.
Caution to the order because the first language return is returned, so your new instance must be before the fixed instance. (in own case we added and DomainLanguageDetection)
![Fine install screenshot](https://raw.github.com/thecodingmachine/utils.i18n.fine.language-detection/4.0/doc/images/2_add_instance.png)

Click on the new instance to configure it
![Fine install screenshot](https://raw.github.com/thecodingmachine/utils.i18n.fine.language-detection/4.0/doc/images/3_example_language.png)

Your language detection is ready ! 

###With instance of Fine Common
- [Please see the package common](http://www.mouf-php.com/)[https://mouf-php.com/packages/mouf/utils.i18n.fine.common]