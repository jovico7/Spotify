<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsSeeder extends Seeder
{
    public function run()
    {
        // Insertar algunas canciones relacionadas con los álbumes y artistas
        DB::table('tbl_songs')->insert([
            // Canciones del álbum Timelezz (Jhayco)
            ['song_name' => 'En Mi Cuarto', 'song_duration' => '00:03:30', 'id_album' => 1], // Timelezz
            ['song_name' => 'Ley Seca', 'song_duration' => '00:03:25', 'id_album' => 1], // Timelezz
            ['song_name' => 'Sensual Bebé', 'song_duration' => '00:03:10', 'id_album' => 1], // Timelezz

            // Canciones del álbum Reinsertado (Morad)
            ['song_name' => 'Yo No Voy', 'song_duration' => '00:03:00', 'id_album' => 2], // Reinsertado
            ['song_name' => 'Cuando Ella Sale', 'song_duration' => '00:02:55', 'id_album' => 2], // Reinsertado
            ['song_name' => 'Loco', 'song_duration' => '00:03:20', 'id_album' => 2], // Reinsertado

            // Canciones del álbum YHLQMDLG (Bad Bunny)
            ['song_name' => 'Safaera', 'song_duration' => '00:04:55', 'id_album' => 3], // YHLQMDLG
            ['song_name' => 'Yo Perreo Sola', 'song_duration' => '00:02:50', 'id_album' => 3], // YHLQMDLG
            ['song_name' => 'Vete', 'song_duration' => '00:03:12', 'id_album' => 3], // YHLQMDLG
        ]);
    }
}
