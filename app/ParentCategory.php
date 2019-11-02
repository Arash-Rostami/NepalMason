<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentCategory extends Model
{
    protected $table = 'parents';
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function categories()
    {
        return $this->hasMany('App\Category');
    }

}
