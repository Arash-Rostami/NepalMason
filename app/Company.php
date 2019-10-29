<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    public function users()
    {
        return $this->belongsTo('App/User');
    }
    public function cities()
    {
        return $this->belongsTo('App/City');
    }

}
