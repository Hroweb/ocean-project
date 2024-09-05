<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $slug)
 */
class Pages extends Model
{
    protected $fillable = ['title', 'slug', 'meta_desc', 'location', 'content'];

    public function meta(): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Meta::class, 'metable');
    }

    public function hasMeta($key, $value = false): array
    {
        $ret = [];

        foreach ($this->meta as $ind => $item) {
            if ($item->meta_key == $key || (substr($item->meta_key, 0, -1) == $key && $item->meta_value)) {
                $ret[$ind] = ($value === true) ? $item->meta_value : true;
            }
        }

        return $ret;
    }

}
