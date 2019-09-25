<?php

namespace App\Modules\Wallet\Models;

use Illuminate\Database\Eloquent\Model;

class WalletTransaction extends Model
{
    protected $casts =[
      'transaction_date' => 'date'
    ];
    public function wallet()
    {
      return $this->belongsTo(Wallet::class,'wallet_account');
    }

    public function trans_type()
    {
      return $this->belongsTo('App\Modules\Shared\Models\TransactionType','transaction_type');
    }

    public function vendor()
    {
      return $this->belongsTo('App\Merchant','vendor_id');
    }
    public function payment_gateway()
    {
      return $this->belongsTo('App\Modules\Shared\Models\PaymentGateway','payment_gateway_id');
    }
}
