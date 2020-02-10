<?php

namespace Lonban\CaseHistory;

use Illuminate\Support\ServiceProvider as BasicServiceProvider;
use Lonban\CaseHistory\Facades\Facade;

class ServiceProvider extends BasicServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/lang', 'vcc_casehistory');
        $this->mergeConfigFrom(__DIR__ . '/config/config.php', 'vcc_casehistory');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'vcc_casehistory');
        $this->publishes([
            __DIR__.'/lang' => resource_path('lang/vcc_casehistory'),
            __DIR__ . '/config/config.php' => config_path('config.php'),
            __DIR__.'/database/migrations/' => database_path('migrations'),
            __DIR__.'/resources/views' => base_path('resources/views/vcc_casehistory'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Vcc_CaseHistory', function ($app) {
            return new Facade($app['session'], $app['config']);
        });
    }
}
