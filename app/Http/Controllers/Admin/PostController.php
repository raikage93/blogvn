<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   $posts=Post::all();
        return view('admin.post.home',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {   
        $tags=Tag::all();
        $cats=Category::all();
        return view('admin.post.post',compact('tags','cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:6',
            'sub_title'=>'required',
            'slug'=>'required',
            'body'=>'required'
        ]);
        $post=new Post;
        $post->title=$request->title;
        $post->subtitle=$request->sub_title;
        $post->slug=$request->slug;
        $post->body=$request->body;
        if($request->has('publish')){
            $post->status='1';
        }
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);

        return redirect()->route('post.index');
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
        $post=Post::with('tags','categories')->where('id',$id)->first();
        $tags=Tag::all();
        $cats=Category::all();
        return view('admin.post.edit',compact('post','tags','cats'));
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
        $request->validate([
            'title'=>'required|min:6',
            'sub_title'=>'required',
            'slug'=>'required',
            'body'=>'required'
        ]);
        $post=Post::find($id);
        $post->title=$request->title;
        $post->subtitle=$request->sub_title;
        $post->slug=$request->slug;
        $post->body=$request->body;
        if($request->has('publish')){
            $post->status='1';
        }
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        $post->save();

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect()->route('post.index');
    }
}
