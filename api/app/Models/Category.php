<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'type',
    ];

    public function categorizables(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Categorizable::class);
    }

    /*public function events(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphedByMany(Event::class, 'categorizable');
    }

    public function posts(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphedByMany(Post::class, 'categorizable');
    }*/
}
