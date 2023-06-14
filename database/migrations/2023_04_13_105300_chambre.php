<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chambre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chambre', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('type');
            $table->integer('nb_de_lit');
            $table->string('prix_par_personne');
            $table->integer('nb_adult');
            $table->integer('nb_enfant');
            $table->integer('hotel_id');
            $table->string('arrangement_id');
            $table->integer('qte');
            $table->integer('promo');
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
        //
    }
}
