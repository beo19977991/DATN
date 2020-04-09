<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
class NewsDetailController extends Controller
{
    public function getNewsDetail($id)
    {

        $comments = Comment::where('idPost', '=', $id)->get();
        $post = Post::find($id);
        return view('newsdetail',['post'=>$post, 'comments'=>$comments]);
    }
}
