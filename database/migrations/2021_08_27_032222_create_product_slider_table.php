<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_slider', function (Blueprint $table) {
            $table->id();
            $table->foreignId('slider_id');
            $table->foreignId('anime_id');
            $table->foreign('slider_id')->references('id')->on('sliders');
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
        Schema::dropIfExists('product_slider');
    }
}
