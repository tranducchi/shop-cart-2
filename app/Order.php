<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';
    public function user()
    {
        return $this->hasOne('App\User');
    }
    public function product()
    {
        return $this->hasOne('App\Product');
    }
}
