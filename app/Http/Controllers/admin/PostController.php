<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category')->orderBy('id','desc')->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post = new Post();
        $categories = category::pluck('name', 'id');
        return view('admin.posts.create', compact('post','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = str_slug($request->name);
        $data = Post::create([
            'name'=>$request->name,
            'slug'=>$slug,
            'category_id'=>$request->category_id,
            'content'=>$request->content
        ]);
        return redirect()->route('admin.posts.index')->with("success","L'article à bien était créer");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::get()->where('id', $id)->first();
        $categories = category::pluck('name','id');
        return view('admin.posts.edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slug = str_slug($request->name);
        $data = Post::where('id', $id)->update([
            'name'=>$request->name,
            'slug'=>$slug,
            'category_id'=>$request->category_id,
            'content'=>$request->content
        ]);
        return redirect()->route('admin.posts.index')->with("success","L'article à bien etait modifier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function red()
    {
        return redirect()->route('admin.posts.index');
    }
}
