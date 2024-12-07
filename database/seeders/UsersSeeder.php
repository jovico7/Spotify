<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_users')->insert([
            ['user_username' => 'jovico7', 'user_password' => 'asdASD123', 'user_email' => 'joelvicente@outlook.es', 'user_name' => 'Joel', 'user_surname' => 'Vicente'],
            ['user_username' => 'anna_16', 'user_password' => 'asdASD123', 'user_email' => 'annasantano@gmail.com', 'user_name' => 'Anna', 'user_surname' => 'Santano']
        ]);
    }
}
