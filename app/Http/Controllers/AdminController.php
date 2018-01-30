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



        //        New Properties
        $newsale=Property::where('purpose','=','Sale')->where('ad_status','=',0)->count();
        $newrent=Property::where('purpose','=','Rent')->where('ad_status','=',0)->count();



        //        Old Properties
        $oldsale=Property::where('purpose','=','Sale')->where('ad_status','=',1)->count();
        $oldrent=Property::where('purpose','=','Rent')->where('ad_status','=',1)->count();


//        $sale=Property::where('user_id','=',$id)->where('purpose','=','Sale')->count();
//        $rent=Property::where('user_id','=',$id)->where('purpose','=','Rent')->count();
//        $approved=Blog::where('user_id','=',$id)->where('status','=',1)->count();
//        $disapproved=Blog::where('user_id','=',$id)->where('status','=',0)->count();
//        $allArticle=Blog::where('user_id','=',$id)->count();
//        $deleted=Property::where('user_id','=',$id)->where('ad_status','=',2)->count();
//

//        $propertytype=Property::where('user_id','=',$id)->where('purpose','=','Sale')->count();
//        return Array($sale,$rent,$approved,$disapproved,$allArticle,$deleted);


        return Array($newsale,$newrent,$oldsale,$oldrent);

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
    public function pendingSale(){

        $result=$this->adminmenu();
        $user=Property::select('property.*')->where('purpose','=','Sale')
            ->where('ad_status','=','0')->orderBy('created_at','desc')->paginate(10);

        $photos = Photo::all();

        return view('Admin.propertieslist',compact('result','photos','user'));
    }
    public function pendingRent(){

        $result=$this->adminmenu();

       // $properties=Property::where('purpose','=','Rent')->where('status','=','0')->get();

        $user=Property::select('property.*')->where('purpose','=','Rent')
            ->where('ad_status','=','0')->orderBy('created_at','desc')->paginate(10);

        $photos = Photo::all();

        return view('Admin.propertieslist',compact('result','photos','user'));

    }



    public function oldSale(){


        $result=$this->adminmenu();
        $user=Property::select('property.*')->where('purpose','=','Sale')
            ->where('ad_status','=','1')->orderBy('superhot','desc')->paginate(10);
        $photos = Photo::all();
        return view('Admin.propertieslist',compact('result','photos','user'));

    }

    public function oldRent(){
        $result=$this->adminmenu();
        $user=Property::select('property.*')->where('purpose','=','Rent')
            ->where('ad_status','=','1')->orderBy('superhot','desc')->paginate(10);
        $photos = Photo::all();
        return view('Admin.propertieslist',compact('result','photos','user'));

    }

}
