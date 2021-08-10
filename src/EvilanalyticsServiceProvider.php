<?php

namespace coroxx\evilanalytics;


use Illuminate\Support\ServiceProvider;

class EvilanalyticsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'evilanalytics');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/lang', 'evilanalytics');
        
         $this->publishes([
            __DIR__ . '/views' => resource_path('views/EvilAnalytics'),
        ]);
    }


    public function register()
    {
    }
}
