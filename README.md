# Row bloom

[![Latest Version on Packagist](https://img.shields.io/packagist/v/row-bloom/spreadsheet-data-loader.svg?style=flat-square)](https://packagist.org/packages/row-bloom/spreadsheet-data-loader)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/row-bloom/spreadsheet-data-loader/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/row-bloom/spreadsheet-data-loader/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/row-bloom/spreadsheet-data-loader/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/row-bloom/spreadsheet-data-loader/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/row-bloom/spreadsheet-data-loader.svg?style=flat-square)](https://packagist.org/packages/row-bloom/spreadsheet-data-loader)

## Installation

```bash
composer require row-bloom/spreadsheet-data-loader
```

```php
use RowBloom\RowBloom\Support;
use RowBloom\SpreadsheetDataLoader\SpreadsheetDataLoader;

app()->make(Support::class)
    ->registerDataLoaderDriver(SpreadsheetDataLoader::NAME, SpreadsheetDataLoader::class);
```

Requires:

-   PHP => 8.1

## Usage

```php
use RowBloom\SpreadsheetDataLoader\SpreadsheetDataLoader;
use RowBloom\RowBloom\Interpolators\PhpInterpolator;
use RowBloom\RowBloom\Renderers\HtmlRenderer;
use RowBloom\RowBloom\RowBloom;

app()->get(RowBloom::class)
    ->addTablePath('foo.csv')
    ->addTablePath('bar.xlsx')
    ->setInterpolator(PhpInterpolator::NAME)
    ->setTemplate('
        <h1>{{ title }}</h1>
        <p>Bold text</p>
        <div>{{ body }}</div>
    ')
    ->setRenderer(HtmlRenderer::class)
    ->save(__DIR__.'/foo.pdf');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
