<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public function products()
    {
        return $this->belongsToMany('App/Product');
    }

    public function group()
    {
        return $this->belongsTo('App/Group');
    }

    public function attributeItems()
    {
        return $this->hasMany('App/AttributeIem');

    }
}
