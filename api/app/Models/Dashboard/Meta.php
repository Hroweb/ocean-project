<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table = 'meta_data';
    protected $fillable = ['meta_key','meta_value', 'metable_id', 'metable_type', 'subtype', 'updated_at'];

    public function metable(): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo();
    }
}
