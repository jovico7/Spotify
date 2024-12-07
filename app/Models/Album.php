<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    // Un álbum pertenece a un artista
    public function artist() 
    {
        return $this->belongsTo(Artist::class, 'id_artist');
    }

    // Un álbum puede tener muchas canciones
    public function song()
    {
        return $this->hasMany(Song::class, 'id_album');
    }
}
