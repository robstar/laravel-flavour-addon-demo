# laravel-flavour-addon-demo

This plugin serves as an example for the [flavour](https://www.flavours.dev/)
integration into [Laravel](https://laravel.com/).

It provides a minimal package that adds a new route, a customizable view, and
a config file.

## Installation

```
$ flavour add composer/robstar/laravel-flavour-addon-demo
```

This will install the latest version. It will add a new configuration file to
`config/flavour.yml`, a new view to `resources/views/flavour.blade.php` and
update your `composer.*` files.

After the installation you have a route called `/flavour` to customize the
background color via the environment variable configured in `app.flavour`. This
value is then set as a configuration key and can be be called using the config
function: `config('flavour.backgroundColor')`
