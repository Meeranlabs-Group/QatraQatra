<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //


    protected $table='city';

    public function property(){

        return $this->belongsTo('App\Property');
    }


    public function society(){

        return $this->hasMany('App\Society');
    }


}
