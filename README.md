# PHPConst2Json #

### What is it? ###
* A small library that outputs PHP class constants as JSON array for transfering constants values from PHP backend to JavaScript code

### How to use it? ###
* Add PHPConst2JScode to your project `composer require sunmant/phpconst2jscode`
* create PHPConst2JScode object: `$c = new PHPConst2JScode()`
* add class with constants you need in your JS code: `$c->addClassConstants(ClassWithConstants::class);`
* get JSON strring with constants and put it to your JS code: `$JsonedConstants = $c->getJSON();` (It is better to use here fully quelified class names than class aliases)


### What else? ###
* PHP 5 or higher is required


### Author? ###
* (c) 2017 Sergey Lebedev, licensed under the Apache License, Version 2.0
* Feel free to contact me at:
    * https://habrahabr.ru/users/sunman/
    * http://stackoverflow.com/users/7135046/sergeylebedev
    * https://www.facebook.com/sergei.lebedev.5891
