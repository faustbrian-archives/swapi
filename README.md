# SWAPI PHP Client

[![Build Status](https://img.shields.io/travis/plients/SWAPI-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/SWAPI-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/swapi.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/SWAPI-PHP-Client.svg?style=flat-square)](https://github.com/plients/SWAPI-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/SWAPI-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/SWAPI-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```
$ composer require plients/swapi
```

## Usage

```php
$client = new Plients\Swapi\Client();
$client->setConfig(['apiKey' => 'YOUR_API_KEY']);

$response = $client->api('File')->scan('infected.rar');

dump($response);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).
