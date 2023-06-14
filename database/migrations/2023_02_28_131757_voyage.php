<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Voyage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('voyage', function (Blueprint $table) {
                $table->id();
                $table->string('image');
                $table->string('titre');
                $table->string('destination');
                $table->text('pays');
                $table->string('thems');
                $table->string('prix');
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
        Schema::dropIfExists('voyage');
    }
}
