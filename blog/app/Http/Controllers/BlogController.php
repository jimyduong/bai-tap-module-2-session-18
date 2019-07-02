<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs=Blog::paginate(5);
        return view('blog/list',compact('blogs'));
    }
    public function view($id){
        $blog=Blog::findOrFail($id);
        return view('blog/view',compact('blog'));
    }
}
