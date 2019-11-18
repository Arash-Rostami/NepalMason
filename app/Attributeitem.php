<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attributeitem extends Model
{
    protected $table = 'attributeitems';
    public $timestamps = false;
    protected $fillable = [
        'name', 'attribute_id'
    ];

    public function products()
    {
        return $this->belongsToMany('App/Product');
    }

    public function attribute()
    {
        return $this->belongsTo('App/Attribute');
    }
}
