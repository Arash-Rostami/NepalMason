<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'lname', 'idcode', 'phone', 'gender', 'birthdate', 'accountno', 'city_id',

    ];

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


    public function orders()
    {
        return $this->belongsToMany('App/Order');
    }

    public function city()
    {
        return $this->belongsTo('App/City');
    }

    public function companies()
    {
        return $this->hasMany('App/Company');
    }

    public function addresses()
    {
        return $this->hasMany('App/Address');
    }

    public function comments()
    {
        return $this->hasMany('App/Comment');
    }

}
