<?php

namespace CmdrTpir\UseHTTPS;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class HttpsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/https.php',
            'https',
        );

        if (config('https.force', 'false') === true) {
            URL::forceScheme('https');
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/https.php' => config_path('https.php'),
            ], 'config');
        }
    }
}
