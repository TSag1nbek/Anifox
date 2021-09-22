<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'original_title',
        'slug',
        'old',
        'description',
        'is_recommend',
        'rating',
        'image',
        'hide_img',
    ];

    public function sliders(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Slider::class,
            'product_slider',
            'anime_id',
            'slider_id'
        );
    }

    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Category::class,
            'anime_category',
            'anime_id',
            'category_id'
        );
    }

    public function types(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Type::class,
            'anime_type',
            'anime_id',
            'type_id'
        );
    }

    public function dates(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Date::class,
            'anime_date',
            'anime_id',
            'date_id'
        );
    }

    public function seasons(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Season::class,
            'anime_season',
            'anime_id',
            'season_id'
        );
    }

    public function comments()
    {
        return $this->hasMany(
            Comment::class,
            'product_id',
            'id'
        );
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
