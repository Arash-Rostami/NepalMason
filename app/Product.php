<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function attributes()
    {
        return $this->belongsToMany('App/Attribute');
    }
    public function orders()
    {
        return $this->belongsToMany('App/Order');
    }
    public function brands()
    {
        return $this->belongsToMany('App/Brand');
    }
    public function images()
    {
        return $this->belongsToMany('App/Image');
    }
    public function attributeItems()
    {
        return $this->belongsToMany('App/AttributeItem');
    }
    public function comments()
    {
        return $this->hasMany('App/Comment');
    }
    public function categories()
    {
        return $this->hasOne('App/Category');
    }
    public function discounts()
    {
        return $this->belongsTo('App/Discount');
    }
}
