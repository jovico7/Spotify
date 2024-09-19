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
        Schema::create('tbl_playlists', function (Blueprint $table) {
            $table->id('id_playlist');  // Crea un BIGINT UNSIGNED automáticamente
            $table->string('playlist_name');
            $table->unsignedBigInteger('id_user');
            $table->timestamps();

            $table->foreign('id_user')->references('id_user')->on('tbl_users'); 
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tbl_playlists');
    }
};
