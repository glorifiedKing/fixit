<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWalletTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('transaction_type');
            $table->integer('wallet_account')->index();
            $table->float('exchange_rate')->default(1.0);
            $table->date('transaction_date')->index();
            $table->decimal('amount',13,2);
            $table->string('currency',4)->default('UGX');
            $table->integer('vendor_id')->nullable();
            $table->integer('payment_gateway_id')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallet_transactions');
    }
}
