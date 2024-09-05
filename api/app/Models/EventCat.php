<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventCat extends Model
{
    protected $fillable = [
        'title',
        'logo',
        'slug',
    ];
}
