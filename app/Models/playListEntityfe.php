<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playListEntityfe extends Model
{
    use HasFactory;
    protected $table = 'play_list_entityfe';

    //protected $primaryKey = ['id', 'userId'];

    // $incrementing = false;

    protected $casts = [
        'tracks' => 'array',
        'inLibrary' => 'datetime'
    ];

    protected $fillable = [
        'id',
        'playlistId',
        'userId',
        'author',
        'description',
        'duration',
        'durationSeconds',
        'privacy',
        'thumbnails',
        'title',
        'trackCount',
        'tracks',
        'year',
        'liked',
        'inLibrary',
        'downloadState',
        'created_at',
        'updated_at',
    ];

}

