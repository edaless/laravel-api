<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            // VERSIONE 2
            $table->foreignId('genre_id')->constrained();
        });
        Schema::table('movie_tag', function (Blueprint $table) {
            // VERSIONE 2
            $table->foreignId('movie_id')->constrained();
            // VERSIONE 2
            $table->foreignId('tag_id')->constrained();
        });
    }


    // public function down()
    // {
    //     Schema::table('movies', function (Blueprint $table) {

    //         $table->dropForeign('movies_genre_id_foreign');
    //     });

    //     Schema::table('movie_tag', function (Blueprint $table) {

    //         $table->dropForeign('movie_id_movie_id_foreign');

    //         $table->dropForeign('movie_id_tag_id_foreign');
    //     });
    // }
};
