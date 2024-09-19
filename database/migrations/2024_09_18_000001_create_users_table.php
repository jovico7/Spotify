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
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->id('id_user')->autoIncrement();
            $table->string('user_username')->unique();
            $table->string('user_password');
            $table->string('user_email')->unique();
            $table->string('user_name');
            $table->string('user_surname');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tbl_users');
    }
};
