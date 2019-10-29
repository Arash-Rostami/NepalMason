<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function categories()
    {
        return $this->belongsTo('App/Category');
    }
    public function attributes()
    {
        return $this->hasMany('App/Attribute');
    }
}
