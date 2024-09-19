<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_albums', function (Blueprint $table) {
            $table->id('id_album')->autoIncrement();
            $table->string('album_name');
            $table->unsignedBigInteger('id_artist');
            $table->date('album_release_date')->nullable();
            $table->timestamps();

            $table->foreign('id_artist')->references('id_artist')->on('tbl_artists');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tbl_albums');
    }
};
