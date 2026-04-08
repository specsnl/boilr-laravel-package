# {{ toLower Vendor }}/{{ toKebabCase PackageName }}

A {{ PackageName }} package.

## Installation

You can install the package via composer:

```bash
composer require {{ toLower Vendor }}/{{ toKebabCase PackageName }}
```

### Publish the config file

Run the following command to publish the config file:

```bash
php artisan vendor:publish --tag="{{ toKebabCase PackageName }}-config"
```

{{- if eq ComposerLicense "MIT" }}

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
{{- end }}
