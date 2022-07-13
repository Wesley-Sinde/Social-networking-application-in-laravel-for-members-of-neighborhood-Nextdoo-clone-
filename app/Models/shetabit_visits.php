<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shetabit_visits extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'method',
        'request',
        'url',
        'referer',
        'languages',
        'useragent',
        'headers',
        'device',
        'platform',
        'browser',
        'ip',
        'visitable',
        'visitor'
    ];
}
