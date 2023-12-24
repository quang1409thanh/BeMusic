<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pairSongLocalPlaylistfe extends Model
{
    use HasFactory;
    
    protected $table = 'pair_song_local_playlistfe';

    protected $fillable = [
        'playlistId',
        'songId',
        'position',
        'inPlaylist',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'inPlaylist' => 'datetime',
    ];
}
