<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    //
    protected $table='block';


    public function blockname(){
        return $this->hasMany('App\Property');
    }


//    public function phase(){
//
//        return $this->belongsTo('App\Phase');
//    }
}


