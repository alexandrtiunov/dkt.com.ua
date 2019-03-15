<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function typeCompany()
    {
        return $this->belongsTo('App\TypeCompany');
    }

    public function request()
    {
        return $this->hasMany('App\Request');
    }
}
