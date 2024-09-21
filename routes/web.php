<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\PlaylistController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('albums', AlbumController::class);
Route::resource('artists', ArtistController::class);
Route::resource('songs', SongController::class);
Route::resource('playlists', PlaylistController::class);
