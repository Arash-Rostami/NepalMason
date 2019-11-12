<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'imagepath'
    ];

    public function products()
    {
        return $this->belongsToMany('App/Product');
    }
}
