# PHPConst2Json #

### What is it? ###
* A small library that outputs PHP class constants as JSON array for transfering constants values from PHP backend to JavaScript code

### How to use it? ###
* Add PHPConst2JScode to your project `composer require sunmant/phpconst2jscode`
* create PHPConst2JScode object: `$c = new PHPConst2JScode()`
* add class with constants you need in your JS code: `$c->addClassConstants(ClassWithConstants::class);`
* get constants JSON and add it to your JS code, for example like this: `echo 'var PHPConstants = ' . $c->getJSON();` (It is better to use fully qualified class names here than aliases)
* now you can use PHP constants values in yourJS code: `var someConstantValue = PHPConstants['ClassWithConstants::SOME_CONSTANT'];`


### What else? ###
* PHP 5 or higher is required


### Author? ###
* (c) 2017 Sergey Lebedev, licensed under the Apache License, Version 2.0
* Feel free to contact me at:
    * https://habrahabr.ru/users/sunman/
    * http://stackoverflow.com/users/7135046/sergeylebedev
    * https://www.facebook.com/sergei.lebedev.5891
