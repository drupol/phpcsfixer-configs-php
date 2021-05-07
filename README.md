[![Latest Stable Version][latest stable version]][1]
 [![GitHub stars][github stars]][1]
 [![Total Downloads][total downloads]][1]
 [![GitHub Workflow Status][github workflow status]][2]
 [![License][license]][1]
 [![Donate!][donate github]][5]
 [![Donate!][donate paypal]][6]

# PHP-CS-Fixer Configurations

## Description

This package provides a set [PHP-Cs-Fixer][7]
configuration objects ready to be used in any project using PHP-Cs-Fixer.

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

[1]: https://packagist.org/packages/drupol/phpcsfixer-configs-php
[2]: https://github.com/drupol/phpcsfixer-configs-php/actions
[latest stable version]: https://img.shields.io/packagist/v/drupol/phpcsfixer-configs-php.svg?style=flat-square
[github stars]: https://img.shields.io/github/stars/drupol/phpcsfixer-configs-php.svg?style=flat-square
[total downloads]: https://img.shields.io/packagist/dt/drupol/phpcsfixer-configs-php.svg?style=flat-square
[github workflow status]: https://img.shields.io/github/workflow/status/drupol/phpcsfixer-configs-php/Continuous%20Integration?style=flat-square
[code quality]: https://img.shields.io/scrutinizer/quality/g/drupol/phpcsfixer-configs-php/master.svg?style=flat-square
[3]: https://scrutinizer-ci.com/g/drupol/phpcsfixer-configs-php/?branch=master
[4]: https://shepherd.dev/github/drupol/phpcsfixer-configs-php
[license]: https://img.shields.io/packagist/l/drupol/phpcsfixer-configs-php.svg?style=flat-square
[donate github]: https://img.shields.io/badge/Sponsor-Github-brightgreen.svg?style=flat-square
[donate paypal]: https://img.shields.io/badge/Sponsor-Paypal-brightgreen.svg?style=flat-square
[5]: https://github.com/sponsors/drupol
[6]: https://www.paypal.me/drupol
[7]: https://github.com/FriendsOfPHP/PHP-CS-Fixer