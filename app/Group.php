<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'category_id'
    ];

    public function category()
    {
        return $this->hasOne('App/Category');
    }

    public function attributes()
    {
        return $this->hasMany('App/Attribute');
    }

    public function size()
    {
        return $this->belongsTo('App/Size');
    }
}
