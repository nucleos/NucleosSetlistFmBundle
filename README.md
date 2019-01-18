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

This library provides a wrapper for using the [Setlist.fm API] inside PHP and a bridge for symfony.

## Installation

Open a command console, enter your project directory and execute the following command to download the latest stable version of this library:

```
composer require core23/setlistfm-bundle

composer require guzzlehttp/guzzle # if you want to use Guzzle native
composer require php-http/guzzle6-adapter # if you want to use HTTPlug with Guzzle
```

## Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles in `bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Http\HttplugBundle\HttplugBundle::class                             => ['all' => true],
    Core23\SetlistFmBundle\Bundle\Core23SetlistFmBundle::class => ['all' => true],
];
```

## Configure the Bundle

Create a configuration file called `core23_setlistfm.yaml`:

```yaml
# config/packages/core23_setlistfm.yaml

core23_setlistfm:
    api:
        key:    "%setlistfm_api.key%"
```

Define a [HTTPlug] client in your configuration.

```yaml
# config/packages/httplug.yaml

httplug:
    classes:
        client: Http\Adapter\Guzzle6\Client
        message_factory: Http\Message\MessageFactory\GuzzleMessageFactory
        uri_factory: Http\Message\UriFactory\GuzzleUriFactory
        stream_factory: Http\Message\StreamFactory\GuzzleStreamFactory
```

### API cache

It is recommended to use a cache to reduce the API usage.

```yaml
# config/packages/httplug.yaml

httplug:
    plugins:
        cache:
            cache_pool: 'acme.httplug_cache'
            config:
                default_ttl: 7200 # Two hours
    clients:
        default:
            plugins:
                - httplug.plugin.cache
```

## License

This library is under the [MIT license](LICENSE.md).

[HTTPlug]: http://docs.php-http.org/en/latest/index.html
[Setlist.fm API]: https://api.setlist.fm
