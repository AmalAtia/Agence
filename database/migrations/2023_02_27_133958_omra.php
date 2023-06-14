<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Omra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('omra', function (Blueprint $table) {
                $table->id();
                $table->string('image');
                $table->string('titre');
                $table->string('description');
                $table->date('date_depart');
                $table->date('date_arrive');
                $table->string('prix');
                $table->string('promo');
                $table->date('date_deb');
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
        
        Schema::dropIfExists('omra');
    }
}
