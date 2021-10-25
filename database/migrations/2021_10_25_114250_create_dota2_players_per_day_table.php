<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDota2PlayersPerDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dota2_players_per_day', function (Blueprint $table) {
            $table->id();
            $table->string('dota2_id');
            $table->dateTime('day_start_online');
            $table->dateTime('day_stop_online');
            $table->integer('number_of_hrs_played');
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
        Schema::dropIfExists('dota2_players_per_day');
    }
}
