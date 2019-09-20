<?php

namespace App\Modules\Professional\Providers;

use Caffeinated\Modules\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        $this->loadTranslationsFrom(module_path('professional', 'Resources/Lang', 'app'), 'sms');
        $this->loadViewsFrom(module_path('professional', 'Resources/Views', 'app'), 'sms');
        $this->loadMigrationsFrom(module_path('professional', 'Database/Migrations', 'app'), 'sms');
        $this->loadConfigsFrom(module_path('professional', 'Config', 'app'));
        $this->loadFactoriesFrom(module_path('professional', 'Database/Factories', 'app'));
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $menu =
              [
                'text' => 'Professional',
                'url'  => '',
                'icon' => 'fas fa-fw fa-user',
                'submenu' =>
                    [

          							[
            							'text' => 'New Sms',
            							'url'  => route('admin.roles.index'),
            							'icon' => 'envelope',
                          'can'  => 'View Investors',

          							],
                        [
            							'text' => 'Sent Sms',
            							'url'  => route('admin.roles.index'),
            							'icon' => 'envelope',
                          'can'  => 'View Investors',

          							],
                        [
            							'text' => 'Config',
            							'url'  => route('admin.roles.index'),
            							'icon' => 'envelope',
                          'can'  => 'Manage System',

          							],

                      ]
                ];
             $event->menu->add($menu);
            });
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
