<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function group()
    {
        return $this->hasOne('App/Group');
    }

    public function products()
    {
        return $this->hasMany('App/Product');
    }
}
