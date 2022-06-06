<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('original_title');
            $table->string('overview');
            $table->string('poster_path');
            $table->string('backdrop_path');
            $table->string('release_date');
            $table->string('video');
            $table->string('length');
            $table->string('genre');
            $table->string('quality');
            $table->string('category');
            $table->string('country');
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
        Schema::dropIfExists('movie');
    }
};
