<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductRequest extends Model
{
    public function requeest()
    {
        return $this->belongsTo('App\Requst');
    }

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
