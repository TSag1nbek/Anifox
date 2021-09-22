<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('original_title');
            $table->string('slug');
            $table->string('image')->nullable();
            $table->integer('old')->default(16);
            $table->text('description');
            $table->integer('view_count')->default(0);
            $table->string('hide_img')->nullable();
            $table->string('is_recommend')->default(0);
            $table->integer('rating')->default(3);
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
        Schema::dropIfExists('animes');
    }
}
