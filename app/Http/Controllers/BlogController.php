<?php

namespace App\Http\Controllers;


use App\Blog;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class BlogController extends Controller
{
    //



    public function saveArticle(Request $request){

        $temp = str_slug($request['title'], '-');
        if(!Property::all()->where('slug',$temp)->isEmpty()){
            $i = 1;
            $newslug = $temp . '-' . $i;
            while(!Property::all()->where('slug',$newslug)->isEmpty()){
                $i++;
                $newslug = $temp . '-' . $i;
            }
            $temp =  $newslug;
        }

        $article= new Blog();

        $article['user_id']=Auth::user()->getid();
        $article['title']=$request->title;
        $article['description']=$request->description;
        $article['slug']=$request->title;

        $files=$request->file('file');
        $name = $files->getClientOriginalName();
        $path = $files->move($request['title'], $name);
        $article['path'] = $path;

        $article->save();

        return redirect('/myarticles');
    }


    public function blogDetail($id){
        $article=Blog::where("slug",'=',$id)->get();
        return view('partials.MarketDetails',compact('article'));
    }

    public function approvedArticles(){

        $id=Auth::user()->getid();
        $articles= Blog::where('user_id','=',$id)->where('status','=',1)->paginate(4);
        return view('user.blog.myarticles',compact('articles','result'));
    }


    public function disapprovedArticles(){
        $id=Auth::user()->getid();
        $articles= Blog::where('user_id','=',$id)->where('status','=',0)->paginate(4);
        $result=$this->usermenu();
        return view('user.blog.myarticles',compact('articles','result'));
    }

    public function showAll(){  // user articles

        $id=Auth::user()->getid();
        $articles= Blog::where('user_id','=',$id)->paginate(4);

        $result=$this->usermenu();

        return view('user.blog.myarticles',compact('articles','result'));
//
    }

    public function editArticle($id){
        $data = Blog::where('slug','=',$id)->get();

        return view('user.blog.editarticle',compact('data'));
    }

    public function allBlogs(){ //market analysis All Blogs

        $articles=Blog::paginate(2);

        return view('partials.MarketAnalysis',compact('articles'));
    }

    public function updateArticle(Request $request){

        $article_id= $request['article_id'];
//            $feature_id = $request['feature_id'];

//            ($files=$request->file('file'));
//            $name = $files->getClientOriginalName();
//            $path = $files->move($request['title'], $name);
////            $update['path'] = $path;

        if( ($files=$request->file('file'))  ){
            $name = $files->getClientOriginalName();
            $path = $files->move($request['title'], $name);
//                $update['path'] = $path;
        }


        else{
            $path = $request->path;
        }



        Blog::where('id','=',$article_id)->update(['title'=> $request['title'],'description'=>$request['description'],
            'path'=> $path ]);

        return redirect('/myarticles');
    }
}
