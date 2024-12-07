<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaylistsSongsSeeder extends Seeder
{
    public function run()
    {
        // Asociar canciones a las playlists
        DB::table('tbl_playlists_songs')->insert([
            // Playlist 1 (Urban Hits)
            ['id_playlist' => 1, 'id_song' => 1],  // En Mi Cuarto (Timelezz)
            ['id_playlist' => 1, 'id_song' => 4],  // Yo No Voy (Reinsertado)
            ['id_playlist' => 1, 'id_song' => 7],  // Safaera (YHLQMDLG)

            // Playlist 2 (Latino Vibes)
            ['id_playlist' => 2, 'id_song' => 2],  // Ley Seca (Timelezz)
            ['id_playlist' => 2, 'id_song' => 5],  // Cuando Ella Sale (Reinsertado)
            ['id_playlist' => 2, 'id_song' => 8],  // Yo Perreo Sola (YHLQMDLG)
        ]);
    }
}
