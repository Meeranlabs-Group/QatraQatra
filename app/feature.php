<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feature extends Model
{
    //

    protected $table = 'feature';

    public function property(){

        return $this->belongsTo('App\Property');
    }


}
