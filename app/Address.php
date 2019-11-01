<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    public function user()
    {
        return $this->belongsTo('App/User');
    }

    public function city()
    {
        return $this->belongsTo('App/City');
    }
}
