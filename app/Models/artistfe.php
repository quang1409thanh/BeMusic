<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artistfe extends Model
{
    use HasFactory;
    protected $table = 'artistfe';
    //protected $primaryKey = 'channelId';
    //public $incrementing = false;

    protected $casts = [
        'inLibrary' => 'datetime'
    ];

    protected $fillable = [
        'id',
        'channelId',
        'userId',
        'name',
        'thumbnails',
        'followed',
        'inLibrary'
    ];
}
