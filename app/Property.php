<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Property extends Model
{
    //


    protected $table = 'property';


    public function user(){

        return $this->belongsTo('App\User');
    }


    public function feature(){
       return $this->hasOne('App\Feature');
    }




    public function city(){
        return $this->belongsTo('App\City');
    }
    public function society(){
        return $this->belongsTo('App\Society');
    }
    public function phase(){
        return $this->belongsTo('App\Phase');
    }
    public function block(){
        return $this->belongsTo('App\Block');
    }







    public function photos(){
        return $this->hasMany('App\Photo');
    }
 public function photo(){
        return $this->hasMany('App\Photo');
    }

    public function photos1(){
        return $this->hasMany('App\Photo')->where('rank','=',1);
    }






    public function getid(){
        return $this->id;
    }
//    public function setSlugAttribute($value)
//    {
//        $temp = str_slug($this->title, '-');
//        if(!Article::all()->where('slug',$temp)->isEmpty()){
//            $i = 1;
//            $newslug = $temp . '-' . $i;
//            while(!Article::all()->where('slug',$newurl)->isEmpty()){
//                $i++;
//                $newslug = $temp . '-' . $i;
//            }
//            $temp =  $newslug;
//        }
//        $this->attributes['slug'] = $temp;
//    }

}
