<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',20)->collation('utf8mb4_unicode_ci');
            $table->string('code',2)->collation('utf8mb4_unicode_ci');
            $table->string('dial_code',5)->collation('utf8mb4_unicode_ci');
            $table->string('currency_name',20)->collation('utf8mb4_unicode_ci');
            $table->string('currency_symbol',20)->collation('utf8mb4_unicode_ci');
            $table->string('currency_code',10)->collation('utf8mb4_unicode_ci');
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
        Schema::dropIfExists('countries');
    }
}
