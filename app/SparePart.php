<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SparePart extends Model
{
    protected $fillable = ['short_name', 'name'];


    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}