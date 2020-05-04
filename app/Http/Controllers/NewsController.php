<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class NewsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function getListNews(Request $request)
    {
        $posts = Post::orderBy('created_at','DESC')->paginate(2);
        if($request->ajax())
        {
            return view('news.data',['posts'=>$posts])->render();
        }
        return view('news',['posts'=>$posts]);
    }
}
