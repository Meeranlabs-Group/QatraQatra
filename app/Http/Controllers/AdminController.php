<?php

namespace App\Http\Controllers;




use App\User;
use App\Blog;
use App\Photo;
use App\Property;
use App\Agent;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function adminmenu(){

//        $id= Auth::user()->getid();

        //        Old Properties
        $oldsale=Property::where('purpose','=','Sale')->where('status','=',1)->count();
        $oldrent=Property::where('purpose','=','Rent')->where('status','=',1)->count();




        //        New Properties
        $newsale=Property::where('purpose','=','Sale')->where('status','=',0)->count();
        $newrent=Property::where('purpose','=','Rent')->where('status','=',0)->count();


        //        $deletedproperties=Property::where('ad_status','=',2)->count();



//        $saletype=Property::where('purpose','=','Sale')->where('ad_status','=',1);
//        $renttype=Property::where('purpose','=','Rent')->where('ad_status','=',1);


//        $approved=Blog::where('user_id','=',$id)->where('status','=',1)->count();
//        $disapproved=Blog::where('user_id','=',$id)->where('status','=',0)->count();
//        $allArticle=Blog::where('user_id','=',$id)->count();



//        $propertytype=Property::where('user_id','=',$id)->where('purpose','=','Sale')->count();

        return Array($oldsale,$oldrent,$newsale,$newrent);

    }
    public function aboutus(){
        $agents=Agent::all();
        $photos = Photo::all();

            $property =DB::table('property')->select(DB::raw('count(*) as total'),'property.city_id','city.city_name')
                ->join('city','property.city_id','=','city.id')
                ->groupBy('property.city_id','city.city_name')->get();


        return view('about-us',compact('agents','property','photos'));
    }


    public function mainpage(){


        $result=$this->adminmenu();

        return view('Admin.adminpage',compact('result'));

    }
    public function pendingRent(){

        $result=$this->adminmenu();

       // $properties=Property::where('purpose','=','Rent')->where('status','=','0')->get();

        $user=Property::select('property.*')->where('purpose','=','Rent')
            ->where('status','=','0')->join('users', 'users.id', '=', 'property.user_id')->paginate(10);

        $photos = Photo::all();

        return view('Admin.propertieslist',compact('result','photos','user'));

    }
    public function pendingSale(){

        $result=$this->adminmenu();
        $user=Property::select('property.*')->where('purpose','=','Sale')
            ->where('status','=','0')->join('users', 'users.id', '=', 'property.user_id')->paginate(10);

        $photos = Photo::all();

        return view('Admin.propertieslist',compact('result','photos','user'));


    }
    public function oldRent(){
        $result=$this->adminmenu();
        $user=Property::select('property.*')->where('purpose','=','Rent')
            ->where('status','=','1')->join('users', 'users.id', '=', 'property.user_id')->paginate(10);
        $photos = Photo::all();
        return view('Admin.propertieslist',compact('result','photos','user'));

    }
    public function oldSale(){


        $result=$this->adminmenu();
        $user=Property::select('property.*')->where('purpose','=','Sale')
            ->where('status','=','1')->join('users', 'users.id', '=', 'property.user_id')->paginate(10);
        $photos = Photo::all();
        print_r($user);
        return view('Admin.propertieslist',compact('result','photos','user'));

    }

}
