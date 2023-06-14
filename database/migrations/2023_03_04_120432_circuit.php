<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Circuit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('circuit', function (Blueprint $table) {
                $table->id();
                $table->string('image');
                $table->string('titre');
                $table->string('description');
                $table->string('programme');
                $table->string('ville_depart');
                $table->string('ville_arrive');
                $table->string('prix');
                $table->integer('nb_personne');
                $table->integer('nb_disponible');
                $table->string('logement');
                $table->date('date_debut');
                $table->date('date_fin');

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
        {
            Schema::dropIfExists('circuit');
        }
    }
}
