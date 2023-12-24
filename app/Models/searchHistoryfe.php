<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class searchHistoryfe extends Model
{
    use HasFactory;

    protected $table = 'search_historyfe';
    //protected $primaryKey = ['query', 'userId'];
    //public $incrementing = false;

    protected $casts = [

    ];

    protected $fillable = [
        'id',
        'query',
        'userId'
    ];
}
