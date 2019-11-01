<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    public function users()
    {
        return $this->hasMany('App/User');
    }

    public function companies()
    {
        return $this->hasMany('App/Company');
    }

    public function addresses()
    {
        return $this->hasMany('App/Address');
    }

}
