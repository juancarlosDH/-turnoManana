<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablasMoviesGenres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres', function(Blueprint $table){
            $table->increments('id');
            $table->string('name', 180)->unique();
            $table->timestamps();
        });

        Schema::create('movies', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->integer('genre_id')->nullable();
            $table->integer('duracion')->nullable();
            $table->timestamp('release_date');
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
        Schema::drop('movies');
        Schema::drop('genres');
    }






}
