<?php

namespace App\Http\Controllers;

use App\User;
use App\Blog;
use App\Photo;
use App\Property;


use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{


    public function profile()
    {
        $id = Auth::user()->getid();

        $result=$this->usermenu();

        $data= User::find($id);
        if($data->path=="")
        {
            $data->path="assets/img/user logo.png";
        }

        return view('user.profile.profile', compact('data','result'));
    }


    public function RentProperties(){

        $id=Auth::user()->id;

        $data= Property::where('user_id','=',$id)->where('purpose','=','Rent')->orderBy('id','desc')->paginate(8);
        $photos = Photo::all();

        $result=$this->usermenu();

        return view('user.property.myproperties',compact('data','photos','result'));

}

    public function SaleProperties(){


        $id=Auth::user()->id;
        $data= Property::where('user_id','=',$id)->where('purpose','=','Sale')->orderBy('id','desc')->paginate(8);
        $photos = Photo::all();

        $result=$this->usermenu();

        return view('user.property.myproperties',compact('data','photos','result'));
}


public function deletedData(){

    $id=Auth::user()->id;
    $data= Property::where('user_id','=',$id)->where('ad_status','=',2)->orderBy('id','desc')->paginate(8);
    $photos = Photo::all();
    $result=$this->usermenu();
    return view('user.property.myproperties',compact('data','photos','result'));
}



public function updatePropertyStatus($id){



    Property::where('slug','=',$id)->update(['ad_status'=>0]);

    return redirect('/deleted');

}
    public function updateprofile(Request $request){

        $update=new User();



                if( ($files=$request->file('file'))  ){
                $name = $files->getClientOriginalName();
                $path = $files->move($request['name'], $name);
                $update['path'] = $path;
                }


                else{
                    $path = $request->path;
                }

                Auth::user()->where('id', Auth::user()->getid())->update(['name'=> $request['name'],'number'=> $request['number'],
                    'address'=> $request['address'], 'city'=> $request['city'] , 'email'=> $request['email'],'zip'=> $request['zip'],
                    'path'=> $path ]);

                return redirect('/profile');

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [

            'password' => 'required|string|min:6|confirmed',
        ]);
    }

        public function updatepassword(Request $request)
        {


            $update = new User();

            //        $update['name'] = $request['name'];
//echo     Auth::user()->password ;

//            $echo =     ) ;
//
//
//            echo "<br>";
//         echo $echo;


            if (Hash::check($request['password'], Auth::user()->password ) ){
            }


//            Auth::user()->where('id', Auth::user()->getid())->update(['password'=> $request['password'] ]);



        }

}
