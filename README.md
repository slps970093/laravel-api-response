# Laravel API Response

[![Latest Version on Packagist](https://img.shields.io/packagist/v/slps970093/laravel-api-response.svg?style=flat-square)](https://packagist.org/packages/slps970093/laravel-api-response)
[![Total Downloads](https://img.shields.io/packagist/dt/slps970093/laravel-api-response.svg?style=flat-square)](https://packagist.org/packages/slps970093/laravel-api-response)
![GitHub Actions](https://github.com/slps970093/laravel-api-response/actions/workflows/main.yml/badge.svg)

標準化API正確與錯誤的輸出套件<br />

## Installation

You can install the package via composer:

```bash
composer require slps970093/laravel-api-response
```

## Usage

Controller 中回傳完成與失敗<br />
```php
<?php

use Slps970093\LaravelApiResponse\Traits\HasResponse;
class Demo {
    use HasResponse;
    
    public function index()
    {
        return $this->ok([]);
    }
}
```

Controller 中拋出異常<br />
```php
<?php

use Slps970093\LaravelApiResponse\Exceptions\ApiException;

class Demo {
    
    public function index()
    {
        throw new ApiException("aaa");
    }
}
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email slps970093@gmail.com instead of using the issue tracker.

## Credits

-   [Chou, Yu-Hsien](https://github.com/slps970093)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com) by [Beyond Code](http://beyondco.de/).
