<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('business_reg_no');
            $table->string('tax_id')->nullable();
            $table->integer('country_id');
            $table->text('address');
            $table->string('primary_phone_no');
            $table->string('secondary_phone_no')->nullable();
            $table->string('contact_person_name');
            $table->string('contact_person_phone')->nullable();
            $table->string('email')->nullable();
            $table->string('currency',4)->default('UGX');
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
        Schema::dropIfExists('vendors');
    }
}
