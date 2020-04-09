<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function postComment(Request $request)
    {   
        if ($request->ajax()){
            $comment = new Comment;
            $comment->idUser = $request->idUser;
            $comment->idPost = $request->idPost;
            $comment->idParent =$request->idParent;
            $comment->body = $request->body;
            
            $comment->save();
            return true;
        }
        return false;
    }
}
