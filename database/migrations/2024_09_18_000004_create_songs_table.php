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
        Schema::create('tbl_songs', function (Blueprint $table) {
            $table->id('id_song')->autoIncrement();
            $table->unsignedBigInteger('id_album');
            $table->string('song_name');
            $table->time('song_duration')->nullable();
            $table->timestamps();

            $table->foreign('id_album')->references('id_album')->on('tbl_albums');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tbl_songs');
    }
};
