<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->integer('nb_etoile');
            $table->text('short_description');
            $table->string('adresse');
            $table->string('arrangement');
            $table->string('option');
            $table->int('prix');
            $table->string('promo');
            $table->string('maps');

            $table->date('date_deb');
            $table->date('date_fin');
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
        Schema::dropIfExists('hotels');
    }
}
