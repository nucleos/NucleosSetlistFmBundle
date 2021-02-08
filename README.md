NucleosSetlistFmBundle
======================
[![Latest Stable Version](https://poser.pugx.org/nucleos/setlistfm-bundle/v/stable)](https://packagist.org/packages/nucleos/setlistfm-bundle)
[![Latest Unstable Version](https://poser.pugx.org/nucleos/setlistfm-bundle/v/unstable)](https://packagist.org/packages/nucleos/setlistfm-bundle)
[![License](https://poser.pugx.org/nucleos/setlistfm-bundle/license)](https://packagist.org/packages/nucleos/setlistfm-bundle)

[![Total Downloads](https://poser.pugx.org/nucleos/setlistfm-bundle/downloads)](https://packagist.org/packages/nucleos/setlistfm-bundle)
[![Monthly Downloads](https://poser.pugx.org/nucleos/setlistfm-bundle/d/monthly)](https://packagist.org/packages/nucleos/setlistfm-bundle)
[![Daily Downloads](https://poser.pugx.org/nucleos/setlistfm-bundle/d/daily)](https://packagist.org/packages/nucleos/setlistfm-bundle)

[![Continuous Integration](https://github.com/nucleos/NucleosSetlistFmBundle/workflows/Continuous%20Integration/badge.svg?event=push)](https://github.com/nucleos/NucleosSetlistFmBundle/actions?query=workflow%3A"Continuous+Integration"+event%3Apush)
[![Code Coverage](https://codecov.io/gh/nucleos/NucleosSetlistFmBundle/graph/badge.svg)](https://codecov.io/gh/nucleos/NucleosSetlistFmBundle)
[![Type Coverage](https://shepherd.dev/github/nucleos/NucleosSetlistFmBundle/coverage.svg)](https://shepherd.dev/github/nucleos/NucleosSetlistFmBundle)

This library provides a symfony bundle for [Setlist.fm PHP API](https://github.com/nucleos/setlistfm-php-api).

## Installation

Open a command console, enter your project directory and execute the following command to download the latest stable version of this library:

```
composer require nucleos/setlistfm-bundle
# To define a default http client and message factory
composer require symfony/http-client nyholm/psr7
```

## Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles in `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Nucleos\SetlistFmBundle\NucleosSetlistFmBundle::class => ['all' => true],
];
```

## Configure the Bundle

Create a configuration file called `nucleos_setlistfm.yaml`:

```yaml
# config/packages/nucleos_setlistfm.yaml

nucleos_setlistfm:
    api:
        key:    "%setlistfm_api.key%"

    http:
        client: 'httplug.client'
        message_factory: 'nyholm.psr7.psr17_factory'
```


## License

This library is under the [MIT license](LICENSE.md).

[Setlist.fm API]: https://api.setlist.fm
