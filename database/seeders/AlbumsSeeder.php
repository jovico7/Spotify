<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_albums')->insert([
            ['album_name' => 'Timelezz', 'album_release_date' => '2021-09-03', 'id_artist' => 1],
            ['album_name' => 'Reinsertado', 'album_release_date' => '2023-05-12', 'id_artist' => 2],
            ['album_name' => 'YHLQMDLG', 'album_release_date' => '2020-02-29', 'id_artist' => 3]
        ]);
    }
}
