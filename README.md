# This is my package PackagePhp

[![Latest Version on Packagist](https://img.shields.io/packagist/v/savvyosive/package-php.svg?style=flat-square)](https://packagist.org/packages/savvyosive/package-php)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/savvyosive/package-php/run-tests?label=tests)](https://github.com/savvyosive/package-php/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/savvyosive/package-php/Check%20&%20fix%20styling?label=code%20style)](https://github.com/savvyosive/package-php/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/savvyosive/package-php.svg?style=flat-square)](https://packagist.org/packages/savvyosive/package-php)


## Installation

You can install the package via composer:

```bash
composer require savvyosive/package-php
```

## Usage

```php

use Savvyosive\UnitConversions\Weight;

Weight::fromkilograms(100)->toLbs();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [SavvyOsive](https://github.com/SavvyOsive)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
