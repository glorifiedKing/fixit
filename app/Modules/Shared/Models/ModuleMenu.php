<?php

namespace App\Modules\Shared\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ModuleMenu extends Model
{
    protected $table="module_menus";

    public function submenu()
    {
      
          return $this->hasMany('App\Modules\Shared\Models\ModuleSubmenu','module_menu_id')->where('module_submenus.enabled',1);


    }
}
