<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getName()
    {
        if($this->username)
        {
            return $this->username;
        }

        return null;
    }

    public function getEmail()
    {
        if($this->email)
        {
            return $this->email;
        }

        return null;
    }

    public function getData()
    {
        if($this->created_at)
        {
            return $this->created_at;
        }

        return  null;
    }

    public function isAdmin()
    {
        return $this->is_admin === 1;
    }

    /*
    * Get users likes
    */
    public function likes()
    {
        return $this->hasMany(Like::class, 'user_id');
    }

    /**
     * Like Episode
     */
    public function hasLikedProduct(Anime $status)
    {
        return (bool) $status->likes
            ->where('likeable_id', $status->id)
            ->where('likeable_type', get_class($status))
            ->where('user_id', $this->id)
            ->count();
    }
}
