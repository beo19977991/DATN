<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Course;
use App\TypeExercise;

class NewsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function getListNews(Request $request)
    {
        $type_exercise = TypeExercise::all();
        $classes = Course::all();
        $posts = Post::orderBy('created_at','DESC')->paginate(2);
        return view('news',['posts'=>$posts,'classes'=>$classes,'type_exercise'=>$type_exercise]);
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
