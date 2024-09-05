<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $fillable = [
        'title', 'description', 'main_image', 'hover_image'
    ];
}
