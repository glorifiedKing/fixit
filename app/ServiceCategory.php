<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    public function sub_categories()
    {
      return $this->hasMany('App\ServiceSubCategory','parent_service_id');
    }
}
