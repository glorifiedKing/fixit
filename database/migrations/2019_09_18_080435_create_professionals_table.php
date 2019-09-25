<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('national_id')->nullable();
            $table->string('phone_number',20);
            $table->string('email');
            $table->string('company_name')->nullable();
            $table->text('company_address')->nullable();
            $table->string('display')->default('person');
            $table->text('description')->nullable();
            $table->integer('status')->default(0);
            $table->integer('country_id');
            $table->text('professional_photo')->nullable();
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
        Schema::dropIfExists('professionals');
    }
}
