<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class queueEntityfe extends Model
{
    use HasFactory;
    protected $table = 'queue_entityfe';

    protected $fillable = [
        'id',
        'queue_id',
        'listTrack',
        'userId',
        'created_at',
        'updated_at',
    ];


    protected $casts = [
        'listTrack' => 'array',
    ];
}
