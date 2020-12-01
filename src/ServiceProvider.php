<?php

namespace Akhaled\SelectCountry;

use Akhaled\SelectCountry\Components\Select;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // load views
        $this->loadViewsFrom(__DIR__ . '/views', 'select-country');

        // inject required javascript
        Blade::include('select-country::js', 'selectCountryScripts');

        // register blade component
        Blade::component('select-country', Select::class);

        // publish config
        $this->publishes([__DIR__ . '/config/select-country.php' => config_path('select-country.php')], 'select-country');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // merge configurations
        $this->mergeConfigFrom(__DIR__ . '/config/select-country.php', 'select-country');
    }
}