<?php

namespace SoapBox\Settings;

use SoapBox\Settings\Repositories\Settings;
use Symfony\Component\Cache\Simple\ArrayCache;
use SoapBox\Settings\Repositories\CacheSettings;
use SoapBox\Settings\Repositories\DatabaseSettings;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../resources/migrations');

        $this->app->bind(Settings::class, function ($app) {
            return new CacheSettings(new DatabaseSettings(), new ArrayCache());
        });
    }
}
