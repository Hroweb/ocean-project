<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventYear extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'desc',
    ];
}
