<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceSubCategory extends Model
{
    public function parent()
    {
      return $this->belongsTo('App\ServiceCategory','parent_service_id');
    }
}
