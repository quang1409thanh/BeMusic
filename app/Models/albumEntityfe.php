<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class albumEntityfe extends Model
{
    use HasFactory;
    protected $table = 'album_entityfe';

    //protected $primaryKey = ['browseId', 'userId'];

    //public $incrementing = false;
    protected $casts = [
        'track' => 'array',
        'artistId' => 'array',
        'artistName' => 'array',
        'inLibrary' => 'datetime'
    ];

    protected $fillable = [
        'id',
        'browseId',
        'userId',
        'artistId',
        'artistName',
        'audioPlaylistId',
        'description',
        'duration',
        'durationSeconds',
        'thumbnails',
        'title',
        'trackCount',
        'tracks',
        'type',
        'year',
        'liked',
        'inLibrary',
        'downloadState',
        'created_at',
        'updated_at',
    ];
}
