<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->string('code_reservation');
            $table->integer('user_id');
            $table->date('depart');
            $table->date('arrive');
            $table->integer('room_id');
            $table->integer('nb_adult');
            $table->integer('nb_enfant');
            $table->integer('nb_chambre');
            $table->integer('arrangement_id');
            $table->integer('total_price');
            $table->string('status');
            $table->string('mode_pay');
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
