<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['comp_name', 'short_name', 'tc_id', 'adress_u', 'adress_f', 'city', 'zip', 'country', 'user_id'];

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
