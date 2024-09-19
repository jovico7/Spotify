<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tbl_playlists_songs', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('id_playlist');
            $table->unsignedBigInteger('id_song');


            $table->foreign('id_playlist')->references('id_playlist')->on('tbl_playlists');
            $table->foreign('id_song')->references('id_song')->on('tbl_songs');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tbl_playlists_songs');
    }
};
