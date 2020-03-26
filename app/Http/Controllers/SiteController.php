<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function about()
    {
        return view('about');
    }

    public function shop()
    {
        return view('shop');
    }
    public function features()
    {
        return view('features');
    }
    public function blog()
    {
        $posts = Post::orderBy('id','DESC')->paginate(2);
        $links = $posts->links();

        return view('blog',compact('posts', 'links'));
    }
    public function contact()
    {
        return view('contact');
    }
}
