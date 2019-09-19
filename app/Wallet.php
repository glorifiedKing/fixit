<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    public function user()
    {
      return $this->belongsTo('App\User','user_id');
    }

    public function transactions()
    {
      return $this->hasMany('App\WalletTransaction','wallet_account');
    }
}
