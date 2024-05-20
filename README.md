# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/processton-io/processton-stats-card.svg?style=flat-square)](https://packagist.org/packages/processton-io/processton-stats-card)
[![Total Downloads](https://img.shields.io/packagist/dt/processton-io/processton-stats-card.svg?style=flat-square)](https://packagist.org/packages/processton-io/processton-stats-card)
![GitHub Actions](https://github.com/processton-io/processton-stats-card/actions/workflows/main.yml/badge.svg)



## Installation

You can install the package via composer:

```bash
composer require processton-io/processton-stats-card
```

## Usage

### generateStatsCard

```php
ProcesstonStatsCard::generateStatsCard(
    $title, 
    $value, 
    $icon,
    $subTitle,
    $format,
    $attachments,
    $width,
    $name,
)
```
### generateStatsCardByURL
```php
ProcesstonStatsCard::generateStatsCardByURL(
    $dataSrc,
    $title,
    $subTitle,
    $attachments,
    $width,
    $name
);
```
### generateStatsCardData
```php
ProcesstonStatsCard::generateStatsCardData(
    $title,
    $value,
    $format,
    $icon,
    $subTitle
);
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ahmadkokab@gmail.com instead of using the issue tracker.

## Credits

-   [Ahmad Faryab Kokab](https://github.com/processton)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
