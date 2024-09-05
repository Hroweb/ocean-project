<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_desc',
        'ovw_text',
        'meta_description',
        'meta_keywords',
        'image',
        'top_news',
        'content',
        'created_at',
        'updated_at'
    ];

    public function categories(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
}
