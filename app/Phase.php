<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    //

    protected $table='phase';
    public function society(){

        return $this->belongsTo('App\Society');
    }

    public function block(){

        return $this->hasMany('App\Block');
    }


}
