<?php

namespace App\Modules\Shared\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Model;

class ModuleSubmenu extends Model
{
    protected $table="module_submenus";

    public function submenu()
    {
      
        return $this->hasmany('App\Modules\Shared\Models\SubmenuMenu','submenu_id')->where('submenu_menus.enabled',1);


    }


}
