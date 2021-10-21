<?php

namespace App;

use ChristianKuri\LaravelFavorite\Traits\Favoriteability;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use Laravelista\Comments\Commenter;
use TCG\Voyager\Facades\Voyager;
use YoHang88\LetterAvatar\LetterAvatar;
use Illuminate\Support\Str;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable, Favoriteability/*Commenter*/;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'whatsapp', 'account_id', 'first_name', 'last_name', 'avatar'
    ];
    public function getAvatarLinkAttribute()
    {
        if ($this->avatar === 'users/default.png') {
            return new LetterAvatar($this->name, 'circle', 250);
        }

        if (Str::startsWith($this->avatar, 'http://') || Str::startsWith($this->avatar, 'https://')) {
            return asset(Voyager::image($this->$this->avatar));
        } else {
            return Voyager::image($this->avatar);
        }
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($avatar)
    {
        return $avatar;
    }

    public function getAvatarWithoutHostAttribute()
    {
        if ($this->avatar === 'users/default.png') {
            return new LetterAvatar($this->name, 'circle', 100);
        }

        if (Str::startsWith($this->avatar, 'http://') || Str::startsWith($this->avatar, 'https://')) {
            return asset(Voyager::image($this->avatar));
        } else {
            return Voyager::image($this->avatar);
        }
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
}
