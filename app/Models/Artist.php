<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $table = 'tbl_artists';

    // Un artista puede tener varios álbumes
    public function albums()
    {
        return $this->hasMany(Album::class, 'id_artist');
    }
}
