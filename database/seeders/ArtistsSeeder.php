<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_artists')->insert([
            ['artist_name' => 'Jhayco'],
            ['artist_name' => 'Morad'],
            ['artist_name' => 'Bad Bunny']
        ]);
    }
}
