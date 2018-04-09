<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\category;

class PostController extends Controller
{
    public function index(){
    	$posts= Post::with("category")->orderBy("id","desc")->paginate(3);
    	$lasts= Post::orderBy("id","desc")->limit(3)->get();
        $astuces = category::get()->where('slug', 'astuces')->first();
    	$categories= category::all();
    	return view("post.index", compact("posts", "categories", "lasts"));
        
    }

    public function show($slug){
    	$post = Post::get()->where('slug', $slug)->first();
    	return view('post.show', compact("post"));
    }

    public function category($slug){

        $categories= category::get()->where('slug',$slug)->first();
        return view('category.categories',compact('categories'));
    }

    public function search(){

        return view('post.search');
    }

    public function searchpost(Request $request){

        $search = Post::where('name','like',"%{$request->search}%")
        ->orWhere('content','like',"%{$request->search}%")
        ->get();
        dd($search);
    }

}


