<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name', 'group_id'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function attributeitems()
    {
        return $this->hasMany(Attributeitem::class);

    }
}
