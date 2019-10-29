<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function orders()
    {
        return $this->belongsTo('App/Order');
    }
    public function products()
    {
        return $this->belongsTo('App/Product');
    }
    public function groups()
    {
        return $this->hasMany('App/Group');
    }

}
