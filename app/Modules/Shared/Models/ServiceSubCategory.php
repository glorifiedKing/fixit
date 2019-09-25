<?php

namespace App\Modules\Shared\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceSubCategory extends Model
{
    public function parent()
    {
      return $this->belongsTo(ServiceCategory::class,'parent_service_id');
    }

    public function professionals()
    {
      return $this->belongsToMany('App\Modules\Professional\Models\Professional','professionals_services','sub_category_id','professional_id');
    }
}
