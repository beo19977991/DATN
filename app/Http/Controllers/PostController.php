<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function getList()
    {
        $post = Post::orderBy('id','DESC')->get();
        return view('admin.post.list',['post'=>$post]);
    }
    public function getAdd()
    {
        return view ('admin.post.add');
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'preview'=>'required',
            'body'=>'required',
        ],[
            'title.required'=>'You have not enter title',
            'preview.required'=>'You have not enter preview',
            'body.required'=>'You have not enter body',
        ]);
        $post = new Post;
        $post->idUser=(Auth::user()->id);
        $post->title = $request->title;
        $post->preview = $request->preview;
        $post->body = $request->body;
        if($request->hasFile('photo'))
        {
            $file=$request->file('photo');
            $extension= $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension != 'jepg')
            {
                return redirect('admin/post/add')->with('error','You just select file have extension jpg, png, jepg');
            }
            $name = $file->getClientOriginalName();
            $photo = Str::random(4)."_".$name;
            while(file_exists("upload/post/photo".$photo))
            {
                $photo = Str::random(4)."_".$name;
            }
            $file->move("upload/post/photo",$photo);
            $post->photo=$photo;
        }
        else
        {
            $post->photo="";
        }
        $post->save();
        return redirect('admin/post/add')->with('message','Add post Success');
    }
    // public function getBlock($id)
    // {

    // }

    public function getDelete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('admin/post/list')->with('message','Delete Post Succes');
    }
    public function getBlock($idPost)
    {
        $post= Post::findOrFail($idPost);
        $post->active=!($post->active);
        $post->save();
        
    }
}
