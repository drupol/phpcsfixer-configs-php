[![Latest Stable Version](https://img.shields.io/packagist/v/drupol/phpcsfixer-configs-php.svg?style=flat-square)](https://packagist.org/packages/drupol/phpcsfixer-configs-php)
 [![GitHub stars](https://img.shields.io/github/stars/drupol/phpcsfixer-configs-php.svg?style=flat-square)](https://packagist.org/packages/drupol/phpcsfixer-configs-php)
 [![Total Downloads](https://img.shields.io/packagist/dt/drupol/phpcsfixer-configs-php.svg?style=flat-square)](https://packagist.org/packages/drupol/phpcsfixer-configs-php)
 [![GitHub Workflow Status](https://img.shields.io/github/workflow/status/drupol/phpcsfixer-configs-php/Continuous%20Integration?style=flat-square)](https://github.com/drupol/phpcsfixer-configs-php/actions)
 [![Scrutinizer code quality](https://img.shields.io/scrutinizer/quality/g/drupol/phpcsfixer-configs-php/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/drupol/phpcsfixer-configs-php/?branch=master)
 [![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/drupol/phpcsfixer-configs-php/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/drupol/phpcsfixer-configs-php/?branch=master)
 [![Mutation testing badge](https://badge.stryker-mutator.io/github.com/drupol/phpcsfixer-configs-php/master)](https://stryker-mutator.github.io)
 [![License](https://img.shields.io/packagist/l/drupol/phpcsfixer-configs-php.svg?style=flat-square)](https://packagist.org/packages/drupol/phpcsfixer-configs-php)
 [![Say Thanks!](https://img.shields.io/badge/Say-thanks-brightgreen.svg?style=flat-square)](https://saythanks.io/to/drupol)
 [![Donate!](https://img.shields.io/badge/Donate-Paypal-brightgreen.svg?style=flat-square)](https://paypal.me/drupol)
 
# PHP-CS-Fixer Configurations

## Description

This package provides a set [PHP-Cs-Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) configuration objects ready to be used in any project using PHP-Cs-Fixer.

## Documentation

Available configuration objects:

* `drupol\PhpCsFixerConfigsPhp\Config\PSR12`
* `drupol\PhpCsFixerConfigsPhp\Config\Php56`
* `drupol\PhpCsFixerConfigsPhp\Config\Php7`
* `drupol\PhpCsFixerConfigsPhp\Config\Php71`
* `drupol\PhpCsFixerConfigsPhp\Config\Php72`
* `drupol\PhpCsFixerConfigsPhp\Config\Php73`

Each configuration object is an object implementing `PhpCsFixer/ConfigInterface`.

It provides a default configuration, mandatory to configure PHP CS Fixer.

It implements the method(s):

```php
    public function withRulesFrom(...$configs);
```

Where the `$configs` parameters must implements `PhpCsFixer/ConfigInterface`.

## Requirements

* PHP >= 7.1.3

## Installation

```composer require --dev drupol/phpcsfixer-configs-php```

## Usage

See the [PHP CS Fixer documentation](https://github.com/FriendsOfPHP/PHP-CS-Fixer) on how to use the configuration object.

## Code quality, tests and benchmarks

Every time changes are introduced into the library, [Github](https://github.com/drupol/phpcsfixer-configs-php/actions) run the tests and the benchmarks.

The library has tests written with [PHPSpec](http://www.phpspec.net/).
Feel free to check them out in the `spec` directory. Run `composer phpspec` to trigger the tests.

Before each commit some inspections are executed with [GrumPHP](https://github.com/phpro/grumphp), run `./vendor/bin/grumphp run` to check manually.

[PHPInfection](https://github.com/infection/infection) is used to ensure that your code is properly tested, run `composer infection` to test your code.

## Contributing

Feel free to contribute to this library by sending Github pull requests. I'm quite reactive :-)
