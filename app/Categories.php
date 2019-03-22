<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $fillable = ['id', 'name', 'slug'];
    protected $table = 'categories';
    public function products()
    {
        return $this->hasMany('App\User');
    }
}
