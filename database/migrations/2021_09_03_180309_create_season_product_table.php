<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('season_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('season_id');
            $table->foreignId('product_id');
            $table->foreign('season_id')->references('id')->on('seasons');
            $table->foreign('product_id')->references('id')->on('episodes');
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
        Schema::dropIfExists('season_product');
    }
}
