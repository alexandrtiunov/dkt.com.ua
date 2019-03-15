<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function productRequest()
    {
        return $this->hasMany('App\ProductRequest');
    }
}
