<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventTemplate extends Model
{
    protected $fillable = ['event_id','type', 'uuid', 'data'];
    protected $casts = [
        'data' => 'array',
    ];

    public function event(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
