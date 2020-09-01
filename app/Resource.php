<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{

    protected $fillable = ['product_id', 'img_path', 'img_preview_H300_path', 'img_preview_H320_path', 'img_preview_H570_path'];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
