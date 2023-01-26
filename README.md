# A PHP/Laravel package for Paperfly delivery service

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nazmulpcc/paperfly.svg?style=flat-square)](https://packagist.org/packages/nazmulpcc/paperfly)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/nazmulpcc/paperfly/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/nazmulpcc/paperfly/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/nazmulpcc/paperfly/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/nazmulpcc/paperfly/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nazmulpcc/paperfly.svg?style=flat-square)](https://packagist.org/packages/nazmulpcc/paperfly)
## Installation

You can install the package via composer:

```bash
composer require nazmulpcc/paperfly
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="paperfly-config"
```

## Usage

```php
$paperfly = new \Nazmul\Paperfly\Paperfly($username, $password, $paperflyKey); // create manually
$paperfly = app()->make(\Nazmul\Paperfly\Paperfly::class); // resolve using the container
\Nazmul\Paperfly\Facades\Paperfly::trackOrder($orderReference, $merchantCode); // using the facade
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Nazmul Alam](https://github.com/nazmulpcc)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
