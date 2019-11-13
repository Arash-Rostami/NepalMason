<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    public $timestamps = false;
    protected $fillable = [
        'imagepath'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
