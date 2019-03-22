<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';
    public function product()
    {
        return $this->hasOne('App\Product');
    }
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
