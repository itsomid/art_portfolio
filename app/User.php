<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'first_name','last_name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function image()
    {
        return $this->hasMany('App\Image');
    }
    public function video()
    {
        return $this->hasMany('App\video');
    }
    public function sound()
    {
        return $this->hasMany('App\sound');
    }
}
