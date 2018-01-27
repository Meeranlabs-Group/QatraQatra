<?php

namespace App\Http\Controllers;


use App\Property;
use App\City;
use App\Society;
use App\Phase;
use App\Block;
use App\Photo;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    //


    public function Show_Societies($cname,$cityid){




        $cites=City::all();
        $photos = Photo::all();

        $property3=Property::select('feature.*','city.*','society.*','phase.*','block.*','property.*')
            ->where("property.city_id","=",$cityid)
            ->leftjoin('feature','property.id','=','feature.property_id')
            ->join('city','city.id','=','property.city_id')->join('society','society.id','=','property.society_id')
            ->join('phase','phase.id','=','property.phase_id')
            ->join('block','block.id','=','property.block_id')
            ->where('ad_status','=','1')->paginate(8);

        //$Property1 =Society::where('city_id','=',$cityid)->orderBy('society_name')->get();
        $Property1 =DB::table('property')->where('property.city_id','=',$cityid)->select(DB::raw('count(*) as total'),'property.society_id','society.society_name')
            ->join('society','property.society_id','=','society.id')
            ->groupBy('property.society_id','society.society_name')->get();
        $x=$cityid;

        $sidesearch=Property::selectRaw('property_type, COUNT(*) as count')
            ->groupBy('property_type')
//            ->orderBy('count', 'asc')
            ->get();


        return view("listings.society",compact("property3","Property1","x","cites","photos","sidesearch"));


    }

    public function Show_Phases($cname,$sname,$cityid,$societyid){


        $cites=City::all();
        $photos = Photo::all();

        $property3=Property::select('feature.*','city.*','society.*','phase.*','block.*','property.*')
            ->where("property.city_id","=",$cityid)->where("property.society_id","=",$societyid)
            ->leftjoin('feature','property.id','=','feature.property_id')
            ->join('city','city.id','=','property.city_id')->join('society','society.id','=','property.society_id')
            ->join('phase','phase.id','=','property.phase_id')
            ->join('block','block.id','=','property.block_id')
            ->where('ad_status','=','1')->paginate(8);
        $Property1 =DB::table('property')->where('property.city_id','=',$cityid)->where('property.society_id','=',$societyid)
            ->select(DB::raw('count(*) as total'),
            'property.phase_id','phase.phase_name')
            ->join('phase','property.phase_id','=','phase.id')
            ->groupBy('property.phase_id','phase.phase_name')->get();

        $x=$cityid;
        $y=$societyid;

        $sidesearch=Property::selectRaw('property_type, COUNT(*) as count')
            ->groupBy('property_type')
            ->get();




        return view("listings.phase",compact("property3","Property1","x","y","cites","photos","sidesearch"));

    }

    public function Show_Block($cname,$sname,$pname,$cityid,$societyid,$phaseid){



        $cites=City::all();
        $photos = Photo::all();

        $Property1 =DB::table('property')->where('property.city_id','=',$cityid)
            ->where('property.society_id','=',$societyid)->where('property.phase_id','=',$phaseid)
            ->select(DB::raw('count(*) as total'),
            'property.block_id','block.block_name')
            ->join('block','property.block_id','=','block.id')
            ->groupBy('property.block_id','block.block_name')->get();


        $property3=Property::select('feature.*','city.*','society.*','phase.*','block.*','property.*')
            ->where("property.city_id","=",$cityid)->where("property.society_id","=",$societyid)
            ->where("property.phase_id","=",$phaseid)
            ->leftjoin('feature','property.id','=','feature.property_id')
            ->join('city','city.id','=','property.city_id')->join('society','society.id','=','property.society_id')
            ->join('phase','phase.id','=','property.phase_id')
            ->join('block','block.id','=','property.block_id')
            ->where('ad_status','=','1')->paginate(8);

        $x=$cityid;
        $y=$societyid;
        $z=$phaseid;

        $sidesearch=Property::selectRaw('property_type, COUNT(*) as count')
            ->groupBy('property_type')
//            ->orderBy('count', 'asc')
            ->get();

//  print_r($property3);

       return view("listings.block",compact("property3","Property1","x","y","z","cites","photos","sidesearch"));
    }

        public function Show_Properties($cname,$sname,$pname,$bname,$cityid,$societyid,$phaseid,$blockid){


            $cites=City::all();
            $photos = Photo::all();
            $property=Property::select('feature.*','city.*','society.*','phase.*','block.*','property.*')
                ->where("property.city_id","=",$cityid)->where("property.society_id","=",$societyid)
                ->where("property.phase_id","=",$phaseid)->where("property.block_id","=",$blockid)
                ->leftjoin('feature','property.id','=','feature.property_id')
                ->join('city','city.id','=','property.city_id')->join('society','society.id','=','property.society_id')
                ->join('phase','phase.id','=','property.phase_id')
                ->join('block','block.id','=','property.block_id')
                ->where('ad_status','=','1')->paginate(8);

            $x=$cityid;
            $y=$societyid;
            $z=$phaseid;
            $f=$blockid;

            $sidesearch=Property::selectRaw('property_type, COUNT(*) as count')
                ->groupBy('property_type')
//            ->orderBy('count', 'asc')
                ->get();


            return view("listings.house",compact("property","Property1","cites","photos","x","y","z","f","sidesearch"));
        }







}
