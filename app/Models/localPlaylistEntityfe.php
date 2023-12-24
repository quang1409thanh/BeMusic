<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class localPlaylistEntityfe extends Model
{
    use HasFactory;
    protected $table = 'local_playlist_entityfe';
    //protected $primaryKey = 'id';

    protected $fillable = [
        'userId',
        'id',
        'localPlaylistId',
        'title',
        'thumbnail',
        'inLibrary',
        'downloadState',
        'syncedWithYouTubePlaylist',
        'youtubePlaylistId',
        'syncState',
        'tracks',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'inLibrary' => 'datetime',
        'tracks' => 'array',
    ];
}
