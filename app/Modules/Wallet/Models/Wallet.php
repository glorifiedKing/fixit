<?php

namespace App\Modules\Wallet\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    public function user()
    {
      return $this->belongsTo('App\User','user_id');
    }

    public function transactions()
    {
      return $this->hasMany('App\Modules\Wallet\Models\WalletTransaction','wallet_account');
    }
}
