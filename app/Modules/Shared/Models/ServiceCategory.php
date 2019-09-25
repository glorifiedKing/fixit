<?php

namespace App\Modules\Shared\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    public function sub_categories()
    {
      return $this->hasMany(ServiceSubCategory::class,'parent_service_id');
    }
}
