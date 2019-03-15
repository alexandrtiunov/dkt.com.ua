<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function productStatus()
    {
        return $this->belongsTo('App\ProductStatus');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function spareParts()
    {
        return $this->belongsTo('App\SparePart');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
