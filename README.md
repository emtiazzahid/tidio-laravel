# tidio for Laravel

<p>
    <a href="https://packagist.org/packages/emtiazzahid/tidio-laravel"><img src="https://img.shields.io/packagist/l/emtiazzahid/tidio-laravel" alt="License"></a>
    <a href="https://packagist.org/packages/emtiazzahid/tidio-laravel"><img src="https://img.shields.io/packagist/v/emtiazzahid/tidio-laravel" alt="Latest Version"></a>
    <a href="https://packagist.org/packages/emtiazzahid/tidio-laravel"><img src="https://img.shields.io/packagist/dt/emtiazzahid/tidio-laravel" alt="Total Downloads"></a>
</p>

tidio has a lot of [integrations](https://help.tidio.com/docs/integrations), but not for Laravel. This is an tidio chat widget for Laravel.

<p>
    <a href="https://www.tidio.com" target="_blank">
        <img src="https://user-images.githubusercontent.com/10188029/135708172-13bb6ead-2cff-4b0c-a655-cf015e4efbf3.png" height="461">
    </a>
</p>

## Minimum Requirements

- PHP 7.0+
- Laravel 5.5+

## Installation

1. `composer require emtiazzahid/tidio-laravel`
2. `php artisan vendor:publish --provider="EmtiazZahid\Tidio\TidioServiceProvider"`
3. Add your chat link to your `.env` file:

```
USERLIKE_KEY="**84ea169c8b4049a*******ec2f982d58fca8b147184ea6a6d356154036****"
```
####To get your widget key:
- Visit: [your dashboard developer settings](https://www.tidio.com/panel/settings/developer)
- Copy public key

## Usage

Just echo the widget code in your app layout blade inside the body tag:

```html
        ...
        {{ \EmtiazZahid\Tidio\Tidio::widgetCode() }}
    </body>
</html>
```

Or, if you don't want to use a config file, you can set your link directly like this:

```html
        ...
        {{ \EmtiazZahid\Tidio\Tidio::widgetCode('your_public_key') }}
    </body>
</html>
```

## License

tidio-laravel is released under the MIT license. See [LICENSE](https://github.com/emtiazzahid/tidio-laravel/blob/master/LICENSE) for details.
