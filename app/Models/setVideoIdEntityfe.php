<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setVideoIdEntityfe extends Model
{
    use HasFactory;
    protected $table = 'set_video_id_entityfe';

   // protected $primaryKey = 'videoId';

    //public $incrementing = false;

    protected $fillable = [
        'videoId',
        'setVideoId',
        'created_at',
        'updated_at',
    ];
}
