<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formatEntityfe extends Model
{
    use HasFactory;

    protected $table = 'format_entityfe';

    //protected $primaryKey = ['videoId', 'userId'];

    //public $incrementing = false;

    protected $fillable = [
        'id',
        'videoId',
        'userId',
        'itag',
        'mimeType',
        'bitrate',
        'contentLength',
        'lastModified',
        'loudnessDb',
        'uploader',
        'uploaderId',
        'uploaderSubCount',
        'uploaderThumbnail',
        'lengthSeconds',
        'description',
        'youtubeCaptionsUrl',
        'playbackTrackingVideostatsPlaybackUrl',
        'playbackTrackingAtrUrl',
        'playbackTrackingVideostatsWatchtimeUrl',
        'cpn',
        'created_at',
        'updated_at',
    ];
}
