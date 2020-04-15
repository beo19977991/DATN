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
        $like = LikedPost::where('idPost','=', $id)
                            ->where('idUser','=', Auth::user()->id)
                            ->first();//check exits!
        $post = Post::find($id);
        return view('newsdetail',['post'=>$post, 'comments'=>$comments,'like'=>$like]);
    }
    public function likePost(Request $request)
    {
        $auth = Auth::user();
        $likePost = LikedPost::where('idPost','=', $request->idPost)
                                    ->where('idUser','=', $auth->id)
                                    ->first();
        
        if(is_null($likePost))
        {
            $like = new LikedPost;
            $like->idUser = Auth::user()->id;
            $like->idPost = $request->post_id;
            $like->status = 1;
            $like->save();
            return response()->json([
                'status' => 1,
                'message' => 'Liked!'
            ],200);
        }
        else
        {
            $currentStatus = $likePost->status;
            $likePost->status = !$currentStatus;
            $likePost->save();
    
            return response()->json([
                'status' => !$currentStatus,
                'message' => 'Update'
            ],200);
        }
    }
}
