<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    //modifiche alle colonne del DB
    {
        Schema::create('movie_ratings', function (Blueprint $table) {
            $table->id();
            $table->integer('movie_rating');
            $table->unsignedInteger('movie_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()      //istruzioni per annullare la modifica della migration (rollback)
    {
        Schema::dropIfExists('movie_ratings');
    }
}
