<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cpf');
            $table->string('rg');
            $table->string('state');
            $table->string('city');
            $table->string('streetAddress');
            $table->string('postcode');
            $table->string('phoneNumber');
            $table->string('email');
            $table->string('creditCardType');
            $table->string('creditCardNumber');
            $table->string('creditCardExpirationDate');
            $table->string('creditCardExpirationDateString');
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
        Schema::dropIfExists('persona');
    }
}
