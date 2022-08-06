# Laravel TrustPayment package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kmlpandey77/trustpayment.svg?style=flat-square)](https://packagist.org/packages/kmlpandey77/trustpayment)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/kmlpandey77/trustpayment/run-tests?label=tests)](https://github.com/kmlpandey77/trustpayment/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/kmlpandey77/trustpayment/Check%20&%20fix%20styling?label=code%20style)](https://github.com/kmlpandey77/trustpayment/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kmlpandey77/trustpayment.svg?style=flat-square)](https://packagist.org/packages/kmlpandey77/trustpayment)

Laravel TrustPayment package

## Installation

You can install the package via composer:

```bash
composer require kmlpandey77/trustpayment
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="trustpayment-config"
```

This is the contents of the published config file:

```php
return [
    'merchant_number' => '',
];
```

## Usage

```php
$trustpayment = new Kmlpandey77\Trustpayment();
echo $trustpayment->echoPhrase('Hello, Kmlpandey77!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [Kamal Pandey.](https://github.com/kmlpandey77)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
