<?php

namespace App\Modules\Admin\Providers;

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
        $this->loadTranslationsFrom(module_path('admin', 'Resources/Lang', 'app'), 'admin');
        $this->loadViewsFrom(module_path('admin', 'Resources/Views', 'app'), 'admin');
        $this->loadMigrationsFrom(module_path('admin', 'Database/Migrations', 'app'), 'admin');
        $this->loadConfigsFrom(module_path('admin', 'Config', 'app'));
        $this->loadFactoriesFrom(module_path('admin', 'Database/Factories', 'app'));
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $menu =
              [
                'text' => 'Admin',
                'url'  => '',
                'icon' => 'fas fa-fw fa-user',
                'submenu' =>
                    [

          							[
            							'text' => 'Users & Permissions',
            							'url'  => '',
            							'icon' => 'male',
                          'has_submenu' => 0,
                          'rank' => 1,
                          'enabled' => 1,
            							'submenu' => [
          				              [
          				                'text' => 'Roles',
          				                'url'  => route('admin.roles.index'),
                                  'can'  => '',
          				                'icon' => 'male',
          				              ],
                                [
          												'text' => 'Permissions',
          												'url'  => route('admin.permissions.index'),
                                  'can'  => '',
          												'icon' => 'clipboard',
          											],
                                [
          												'text' => 'Users',
          												'url'  => route('admin.users.index'),
                                  'can'  => 'User Management and System Administration',
          												'icon' => 'clipboard',
          											],
          										],
          							],
                        [
            							'text' => 'System',
            							'url'  => '',
            							'icon' => 'envelope',
                          'can'  => 'ViewSystemLogs',
            							'submenu' => [
          				              [
          				                'text' => 'Modules',
          				                'url'  => route('admin.modules.index'),
                                  'can'  => 'ViewSystemLogs',
          				                'icon' => 'male',
          				              ],
                                [
          												'text' => 'Parameters',
          												'url'  => route('admin.modules.index'),
                                  'can'  => 'ViewSystemLogs',
          												'icon' => 'clipboard',
          											],
          										],
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
