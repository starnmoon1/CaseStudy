<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'content',
        'image',
        'price',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'productId', 'id');
    }
}
