<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimeTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anime_type', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id');
            $table->foreignId('anime_id');
            $table->foreign('type_id')->references('id')->on('types');
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
        Schema::dropIfExists('anime_type');
    }
}
