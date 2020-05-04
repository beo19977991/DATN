<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
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
    public function postCreatePost(Request $request)
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
        return redirect('page/create_post')->with('message','Add post Success');
    }
    public function getListExercise()
    {
        $exercise = Exercise::orderBy('created_at','DESC')->paginate(1);
        return view('exercise',['exercise'=>$exercise]);
    }
    public function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $exercise = Exercise::orderBy('created_at','DESC')->paginate(1);
            return view('exercises.exercise_data',['exercise'=>$exercise])->render();
        }
    }
}
