<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorizable extends Model
{
    protected $fillable = ['category_id', 'categorizable_type', 'categorizable_id'];

    public function categorizable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }
}
