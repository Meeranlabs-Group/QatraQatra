<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //


    protected $table='city';


    public function cityname(){
         return $this->hasMany('App\Property');
    }


//    public function society(){
//
//        return $this->hasMany('App\Society');
//    }




}
