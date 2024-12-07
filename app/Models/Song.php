<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    // Una canción pertenece a un álbum
    public function album()
    {
        return $this->belongsTo(Album::class, 'id_album');
    }

    // Una canción puede pertenecer a muchas playlists
    public function playlists()
    {
        return $this->belongsToMany(Playlist::class, 'tbl_playlists_songs', 'id_song', 'id_playlist');
    }
}
