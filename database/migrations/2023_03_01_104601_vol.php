<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('vol', function (Blueprint $table) {
                $table->id();
                $table->string('num');
                $table->string('type_vol');
                $table->integer('nb_billet');
                $table->date('date_aller');
                $table->date('date_retour');
                $table->integer('nb_personne');
                $table->string('ville_depart');
                $table->string('ville_arrive');
                $table->string('prix');
                $table->timestamps();
    
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vol');
    }
}
