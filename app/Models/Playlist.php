<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    // Una playlist pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Una playlist puede tener muchas canciones
    public function songs()
    {
        return $this->belongsToMany(Song::class, 'tbl_playlists_songs', 'id_playlist', 'id_song');
    }
}
