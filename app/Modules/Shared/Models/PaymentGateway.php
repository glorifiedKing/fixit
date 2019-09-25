<?php

namespace App\Modules\Shared\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentGateway extends Model
{
    public function country()
    {
      return $this->belongsTo(Country::class,'country_id');
    }
    public function transactions()
    {
      return $this->hasMany('App\Modules\Wallet\Models\WalletTransaction','payment_gateway_id');
    }
}
