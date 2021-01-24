<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        $posts = Post::get();
        $banner = "4Tech Blog for latest news";
        return view('frontend.pages.blog.index1',compact('posts', 'banner'));
    }
    public function show($id){
        $post = Post::findOrFail($id);
        $banner = "4Tech Blog for latest news";
        $last3 = Post::take(3)->get();
        return view('frontend.pages.blog.single-post',compact('post', 'banner','last3'));
    }
}
