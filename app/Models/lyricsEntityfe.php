<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lyricsEntityfe extends Model
{
    use HasFactory;
    protected $table = 'lyrics_entityfe';

    //protected $primaryKey = ['videoId', 'userId'];

    //public $incrementing = false;

    protected $fillable = [
        'videoId',
        'userId',
        'error',
        'lines',
        'syncType',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'lines' => 'array',
    ];
}
