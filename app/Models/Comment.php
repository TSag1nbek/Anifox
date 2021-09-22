<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'product_id',
        'user_id',
        'status',
        'comment'
    ];

    public function article()
    {
        $this->belongsTo(Anime::class);
    }
    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id')->latest();
    }
}
