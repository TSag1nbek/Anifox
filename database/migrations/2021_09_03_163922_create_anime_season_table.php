<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimeSeasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anime_season', function (Blueprint $table) {
            $table->id();
            $table->foreignId('season_id');
            $table->foreignId('anime_id');
            $table->foreign('season_id')->references('id')->on('seasons');
            $table->foreign('anime_id')->references('id')->on('animes');
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
        Schema::dropIfExists('anime_season');
    }
}
