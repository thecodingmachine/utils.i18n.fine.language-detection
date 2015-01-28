Installation
============

Installer
---------

The installer in Mouf framework create an instance of CascadingLanguageDetection and add to it the FixedLanguageDetection with the language "en" for english.

Create instance
---------------

In this example, nous allons ajouter the detection language necessary to your application.
Search the fineCascadingTranslator instance and click on it
IMAGE

You could see the fixed instance fixedEnglishLanguageDetection.
Click on "add an instance" and drag and drop an instance of LanguageDetection in the array.
Caution to the order because the first language return is returned, so your new instance must be before the fixed instance. (in own case we added and DomainLanguageDetection)
IMAGE

Click on the new instance to configure it
IMAGE

Your language detection is ready ! 