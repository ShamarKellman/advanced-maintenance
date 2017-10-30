<?php

namespace Shamarkellman\AdvancedMaintenance;

use Illuminate\Support\ServiceProvider;
use Shamarkellman\AdvancedMaintenance\Middleware\CheckForMaintenanceMiddleware;

class AdvancedMaintenanceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(\App\Http\Kernel $kernel)
    {
        $this->app->singleton('Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode', function($app){
            return  new CheckForMaintenanceMiddleware($app);
        });

        $this->publishes([__DIR__.'/../views/503.blade.php' => resource_path('views/errors/503.blade.php')]);
        $this->publishes([__DIR__.'/../config/advanced-maintenance.php' => config_path('advanced-maintenance.php')]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes.php');

        $this->loadViewsFrom(__DIR__.'/views', 'advanced-maintenance');
    }
}
