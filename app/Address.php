<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    public function users()
    {
        return $this->belongsTo('App/User');
    }
    public function cities()
    {
        return $this->belongsTo('App/City');
    }
}
