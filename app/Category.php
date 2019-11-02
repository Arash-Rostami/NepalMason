<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function order()
    {
        return $this->belongsTo('App/Order');
    }

    public function product()
    {
        return $this->belongsTo('App/Product');
    }

    public function group()
    {
        return $this->belongsTo('App/Group');
    }

    public function parent()
    {
        return $this->belongsTo('App/ParentCategory');
    }


}
