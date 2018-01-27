<?php

namespace App\Http\Controllers;


use App\User;
use App\Blog;
use App\Property;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Array_;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function nice_number($n) {
        // first strip any formatting;
        $n = (0+str_replace(",", "", $n));

        // is this a number?
        if (!is_numeric($n)) return false;

        // now filter it;
        if ($n > 1000000000000) return round(($n/1000000000000), 2).' trillion';
        elseif ($n > 1000000000) return round(($n/1000000000), 2).' billion';
        elseif ($n > 1000000) return round(($n/1000000), 2).' million';
        elseif ($n > 1000) return round(($n/1000), 2).' thousand';

        return number_format($n);
    }

    public function usermenu(){
        $id= Auth::user()->getid();
        $sale=Property::where('user_id','=',$id)->where('purpose','=','Sale')->count();
        $rent=Property::where('user_id','=',$id)->where('purpose','=','Rent')->count();
        $approved=Blog::where('user_id','=',$id)->where('status','=',1)->count();
        $disapproved=Blog::where('user_id','=',$id)->where('status','=',0)->count();
        $allArticle=Blog::where('user_id','=',$id)->count();
$deleted=Property::where('user_id','=',$id)->where('ad_status','=',2)->count();


//        $propertytype=Property::where('user_id','=',$id)->where('purpose','=','Sale')->count();
        return Array($sale,$rent,$approved,$disapproved,$allArticle,$deleted);


    }

}
