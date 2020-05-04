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
        return view('news',['posts'=>$posts]);
    }
    public function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $posts = Post::orderBy('created_at','DESC')->paginate(2);
            return view('news.data',['posts'=>$posts])->render();
        }
    }
}
