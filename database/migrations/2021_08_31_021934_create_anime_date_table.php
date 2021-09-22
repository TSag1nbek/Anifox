<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimeDateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anime_date', function (Blueprint $table) {
            $table->id();
            $table->foreignId('date_id');
            $table->foreignId('anime_id');
            $table->foreign('date_id')->references('id')->on('dates');
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
        Schema::dropIfExists('anime_date');
    }
}
