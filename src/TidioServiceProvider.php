<?php

namespace EmtiazZahid\Tidio;

use Illuminate\Support\ServiceProvider;

class TidioServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/tidio.php' => config_path('tidio.php'),
        ], 'config');
    }

    /**
     * {@inheritDoc}
     */
    public function register()
    {
        //
    }
}
