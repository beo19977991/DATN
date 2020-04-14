<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\LikedPost;
use Illuminate\Support\Facades\Auth;

class NewsDetailController extends Controller
{
    public function getNewsDetail($id)
    {

        $comments = Comment::where('idPost', '=', $id)->get();
        $likes = LikedPost::where('idPost','=', $id)->where('idUser','=',Auth::user()->id)->get();
        $post = Post::find($id);
        return view('newsdetail',['post'=>$post, 'comments'=>$comments,'likes'=>$likes]);
    }
    public function likePost(Request $request)
    {
        
        $likes = LikedPost::all();
        foreach($likes as $l)
        {
            if($l->id==$request->unlikeid)
            {
                $like = LikedPost::find($request->unlikeid);
            }
            else
            {
                $like = new LikedPost;
            }
        }
        $like->idUser= Auth::user()->id;
        $like->idPost=$request->post_id;
        $like->status=$request->status;
        $like->save();
        return 1;
    }
    public function unlikePost(Request $request)
    {
        $likes = LikedPost::all();
        foreach($likes as $l)
        {
            if($l->id==$request->likeid)
            {
                $like = LikedPost::find($request->likeid);
            }
            else
            {
                $like = new LikedPost;
            }
        }
        $like->idUser= Auth::user()->id;
        $like->idPost=$request->post_id;
        $like->status=$request->status;
        $like->save();
        return 1;
    }
}
