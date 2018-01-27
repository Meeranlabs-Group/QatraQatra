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
        $this->hasOne('App\Feature');
    }



    public function city(){
        $this->hasOne('App\City');
    }

    public function society(){
        $this->hasOne('App\Society');
    }
    public function phase(){
        $this->hasOne('App\Phase');
    }
    public function block(){
        $this->hasOne('App\Block');
    }




    public function photo(){
        $this->hasMany('App\Photo');
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
