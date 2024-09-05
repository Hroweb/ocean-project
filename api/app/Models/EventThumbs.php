<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventThumbs extends Model
{
    protected $fillable = ['src', 'alt'];

    public function events(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
