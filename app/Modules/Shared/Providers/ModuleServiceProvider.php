<?php

namespace App\Modules\Shared\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('shared', 'Resources/Lang', 'app'), 'shared');
        $this->loadViewsFrom(module_path('shared', 'Resources/Views', 'app'), 'shared');
        $this->loadMigrationsFrom(module_path('shared', 'Database/Migrations', 'app'), 'shared');
        if(!$this->app->configurationIsCached()) {
            $this->loadConfigsFrom(module_path('shared', 'Config', 'app'));
        }
        $this->loadFactoriesFrom(module_path('shared', 'Database/Factories', 'app'));
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
