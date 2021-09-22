<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $table = 'dates';

    use HasFactory;

    protected $fillable = ['date'];

    public function products(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(
            Anime::class,
            'anime_date',
            'date_id',
            'anime_id'
        );
    }
}
