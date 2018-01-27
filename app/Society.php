<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
    //

    protected $table='society';
    public function city(){

        return $this->belongsTo('App\City');
    }




    public function phase(){

        return $this->hasMany('App\Phase');
    }
}
