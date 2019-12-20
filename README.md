# laravel-flavour-addon-demo

This plugin serves as an example for the [flavour](https://www.flavours.dev/)
integration into [Laravel](https://laravel.com/).

It provides a minimal package that adds a new route, a customizable view, and
a config file.

## Installation

```
$ flavour add composer/robstar/laravel-flavour-addon-demo
```

This will add the addon to the composer.json and install the package. It will 
also add a new configuration file to `config/flavour.yml` and new view to 
`resources/views/flavour.blade.php`. This can be accomplished because flavour
supports post-install scripts that are run automatically.

After the installation you van access a route called `/flavour` to customize the
background color via the environment variable configured in `app.flavour`. This
value is then set as a configuration key and can be be called using the config
function: `config('flavour.backgroundColor')`

The variable can be set in various places depending on how your environment 
env variables. When you are running in Divio cloud it is recommended to set this
in `divio/.env-local` as shown:

```
WELCOME_PAGE_BACKGROUND_COLOR="#336699"
```

This will have the same effect in your local environment as it will have in the
cloud by setting a global environment variable injected into the container. 
