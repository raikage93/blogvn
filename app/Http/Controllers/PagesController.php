<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        $posts=Post::where('status',1)->paginate(4);
        return view('user.home',compact('posts'));
    }
    public function getPost(Post $post){
        return view('user.post',compact('post'));
    }
    public function getAbout(){
        return view('user.about');
    }
    public function getContact(){
        return view('user.contact');
    }
}
