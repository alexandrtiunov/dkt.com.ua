<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    protected $fillable = ['code', 'name', 'price', 'category_id', 'spt_id', 'status', 'quantity', 'user_id', 'short_name',
        'activity', ];

    public function productStatus()
    {
        return $this->belongsTo('App\ProductStatus');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function sparePart()
    {
        return $this->belongsTo('App\SparePart');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function resource()
    {
        return $this->hasMany('App\Resource');
    }
}
