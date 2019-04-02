<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function getHome(){
        return view('admin.home');
    }
    public function createPost(){
        return view('admin.post.post');
    }
    public function getTag(){
        return view('admin.tag.home');
    }
    public function getCategory(){
        return view('admin.category.home');
    }
}
