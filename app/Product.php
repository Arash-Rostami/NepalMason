<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'products';
    protected $fillable = [
        'name', 'description', 'price', 'attribute_id', 'category_id',
        'discount_id','size_id', 'brand_id','attributeitem_id',
    ];



    public function attributes()
    {
        return $this->belongsToMany(Attribute::class);
    }

    public function orders()
    {
        return $this->belongsToMany('App/Order');
    }

    public function brands()
    {
        return $this->belongsToMany('App/Brand');
    }

    public function images()
    {
        return $this->belongsToMany(Image::class);
    }

    public function attributeitems()
    {
        return $this->belongsToMany(Attributeitem::class);
    }

    public function comments()
    {
        return $this->hasMany('App/Comment');
    }

    public function category()
    {
        return $this->hasOne('App/Category');
    }

    public function discount()
    {
        return $this->belongsTo('App/Discount');
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }
}
