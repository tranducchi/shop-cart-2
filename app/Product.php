<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function order()
    {
        return $this->hasMany('App\Order');
    }
    public function categories()
    {
        return $this->hasOne('App\Categories');
    }
}
