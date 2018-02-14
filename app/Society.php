<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    //

    protected $table='society';


    public function societyname(){
        return $this->hasMany('App\Property');
    }



//    public function phase(){
//
//        return $this->hasMany('App\Phase');
//    }
}
