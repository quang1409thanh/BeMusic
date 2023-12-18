<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class songfe extends Model
{
    use HasFactory;

    protected $table = 'songfe';
    //protected $primaryKey = 'videoId';

    //public $incrementing = false;

    protected $casts = [
        'artistId' => 'array',
        'artistName' => 'array',
        'inLibrary' => 'datetime'
    ];

    protected $fillable = [
        'id',
        'userId',
        'videoId',
        'albumId',
        'albumName',
        'artistId',
        'artistName',
        'duration',
        'durationSeconds',
        'isAvailable',
        'isExplicit',
        'likeStatus',
        'thumbnails',
        'title',
        'videoType',
        'category',
        'resultType',
        'liked',
        'totalPlayTime',
        'downloadState',
        'inLibrary'
    ];
}
