<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Exercise;

class PageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function getListTrainer()
    {
        $trainers = User::where('role','=','2')->get();
        return view('trainer',['trainers'=>$trainers]);
    }
    public function getProfile($id)
    {
        $user = User::find($id);
        $posts = Post::where('idUser','=',$id)->get();
        $exercise = Exercise::where('idUser', '=', $id)->get();
        return view('profile',['user'=>$user,'posts'=>$posts, 'exercise'=>$exercise]);
    }
    public function getCreatePost()
    {
        return view('post');
    }
    public function postCreatePost()
    {

    }
}
