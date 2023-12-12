<?php

use App\Facades\ITunes;
use App\Http\Controllers\Download\AlbumController as AlbumDownloadController;
use App\Http\Controllers\Download\ArtistController as ArtistDownloadController;
use App\Http\Controllers\Download\FavoritesController as FavoritesDownloadController;
use App\Http\Controllers\Download\PlaylistController as PlaylistDownloadController;
use App\Http\Controllers\Download\SongController as SongDownloadController;
use App\Http\Controllers\ITunesController;
use App\Http\Controllers\LastfmController;
use App\Http\Controllers\PlayController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(static function (): void {
    Route::get('/', function () {
        return ['sound/api: v.1.0.0'];
    });
});
