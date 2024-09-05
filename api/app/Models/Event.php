<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'desc',
        'overview',
        'meta_description',
        'meta_keywords',
        'image',
        'featured',
        'chosen',
        'bannerColor',
        'content',
    ];

    public function categories(): \Illuminate\Database\Eloquent\Relations\MorphToMany
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }

    public function testimonials(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Testimonial::class, 'event_testimonial', 'event_id', 'testimonial_id');
    }

    public function gallery(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(EventGallery::class, 'event_id', 'id');
    }

    public function thumbs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(EventThumbs::class, 'event_id', 'id');
    }

    public function services(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'event_service', 'event_id', 'service_id');
    }

    public function templates(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(EventTemplate::class, 'event_id', 'id');
    }
}
