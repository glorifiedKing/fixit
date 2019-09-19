<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentGateway extends Model
{
    public function country()
    {
      return $this->belongsTo('App\Country','country_id');
    }
    public function transactions()
    {
      return $this->hasMany('App\WalletTransaction','payment_gateway_id');
    }
}
