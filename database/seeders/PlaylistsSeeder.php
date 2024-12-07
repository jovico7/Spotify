<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaylistsSeeder extends Seeder
{
    public function run()
    {
        // Insertar algunas playlists para los usuarios
        DB::table('tbl_playlists')->insert([
            ['playlist_name' => 'Urban Hits', 'id_user' => 1],  // Playlist del usuario 1
            ['playlist_name' => 'Latino Vibes', 'id_user' => 2],  // Playlist del usuario 2
        ]);
    }
}
