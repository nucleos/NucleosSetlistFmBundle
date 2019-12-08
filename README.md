SetlistFmBundle
===============
[![Latest Stable Version](https://poser.pugx.org/core23/setlistfm-bundle/v/stable)](https://packagist.org/packages/core23/setlistfm-bundle)
[![Latest Unstable Version](https://poser.pugx.org/core23/setlistfm-bundle/v/unstable)](https://packagist.org/packages/core23/setlistfm-bundle)
[![License](https://poser.pugx.org/core23/setlistfm-bundle/license)](https://packagist.org/packages/core23/setlistfm-bundle)

[![Total Downloads](https://poser.pugx.org/core23/setlistfm-bundle/downloads)](https://packagist.org/packages/core23/setlistfm-bundle)
[![Monthly Downloads](https://poser.pugx.org/core23/setlistfm-bundle/d/monthly)](https://packagist.org/packages/core23/setlistfm-bundle)
[![Daily Downloads](https://poser.pugx.org/core23/setlistfm-bundle/d/daily)](https://packagist.org/packages/core23/setlistfm-bundle)

[![Build Status](https://travis-ci.org/core23/SetlistFmBundle.svg)](https://travis-ci.org/core23/SetlistFmBundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/core23/SetlistFmBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/core23/SetlistFmBundle)
[![Code Climate](https://codeclimate.com/github/core23/SetlistFmBundle/badges/gpa.svg)](https://codeclimate.com/github/core23/SetlistFmBundle)
[![Coverage Status](https://coveralls.io/repos/core23/SetlistFmBundle/badge.svg)](https://coveralls.io/r/core23/SetlistFmBundle)

This library provides a symfony bundle for [Setlist.fm PHP API](https://github.com/core23/setlistfm-php-api).

## Installation

Open a command console, enter your project directory and execute the following command to download the latest stable version of this library:

```
composer require core23/setlistfm-bundle
# To define a default http client and message factory
composer require symfony/http-client nyholm/psr7
```

## Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles in `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Core23\SetlistFmBundle\Core23SetlistFmBundle::class => ['all' => true],
];
```

## Configure the Bundle

Create a configuration file called `core23_setlistfm.yaml`:

```yaml
# config/packages/core23_setlistfm.yaml

core23_setlistfm:
    api:
        key:    "%setlistfm_api.key%"

    http:
        client: 'httplug.client'
        message_factory: 'nyholm.psr7.psr17_factory'
```


## License

This library is under the [MIT license](LICENSE.md).

[Setlist.fm API]: https://api.setlist.fm
