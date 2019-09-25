<?php

namespace App\Modules\Professional\Models;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    public function services()
    {
      return $this->belongsToMany('App\Modules\Shared\Models\ServiceSubCategory','professionals_services','professional_id','sub_category_id');
    }
}
