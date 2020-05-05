<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use App\Exercise;
use App\TypeExercise;


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
        $typeExercise = TypeExercise::all();
        $exercise = Exercise::orderBy('created_at','DESC')->paginate(3);
        return view('exercise',['exercise'=>$exercise,'typeExercise'=>$typeExercise]);
    }
    public function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $exercise = Exercise::orderBy('created_at','DESC')->paginate(3);
            return view('exercises.exercise_data',['exercise'=>$exercise])->render();
        }
    }
    public function getCreateExercise()
    {
        $typeExercise = TypeExercise::all();
        return view('create_exercise',['typeExercise'=>$typeExercise]);
    }
    public function postCreateExercise(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'preview'=>'required',

        ],[
            'title.required'=>'ou have not enter Title',
            'preview.required'=>'You have not enter Preview',
        ]);

        $exercise = new Exercise;
        $exercise->idUser = Auth::user()->id;
        $exercise->idExerciseType = $request->typeExercise;
        $exercise->title=$request->title;
        $exercise->preview=$request->preview;
        if($request->hasFile('video'))
        {
            $file=$request->file('video');
            $extension= $file->getClientOriginalExtension();
            if($extension != 'mp4' && $extension != 'wmv' && $extension != 'mov' && $extension != 'flv' && $extension != 'avi')
            {
                return redirect('admin/exercise/add')->with('error','You just select file have extension mp4, wmv, mov, flv, avi');
            }
            $name = $file->getClientOriginalName();
            $video = Str::random(4)."_".$name;
            while(file_exists("upload/exercise/video".$video))
            {
                $video = Str::random(4)."_".$name;
            }
            $file->move("upload/exercise/video",$video);
            $exercise->video=$video;
        }
        else
        {
            $exercise->video="";
        }
        $exercise->save();
        return redirect('page/create_exercise')->with('message','Add Exercise Success');
    }
    public function getEditExercise(Request $request ,$id)
    {
        $typeExercise = TypeExercise::all();
        $exercise= Exercise::find($id);
        return view('exercises.exercise_edit',['exercise'=>$exercise, 'typeExercise'=>$typeExercise]);
    }
    public function postEditExercise(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'preview'=>'required',

        ],[
            'title.required'=>'ou have not enter Title',
            'preview.required'=>'You have not enter Preview',
        ]);
        $exercise = Exercise::find($id);
        $exercise->idUser = Auth::user()->id;
        $exercise->idExerciseType = $request->typeExercise;
        $exercise->title=$request->title;
        $exercise->preview=$request->preview;
        if($request->hasFile('video'))
        {
            $file=$request->file('video');
            $extension= $file->getClientOriginalExtension();
            if($extension != 'mp4' && $extension != 'wmv' && $extension != 'mov' && $extension != 'flv' && $extension != 'avi')
            {
                return redirect('admin/exercise/edit/'.$id)->with('error','You just select file have extension mp4, wmv, mov, flv, avi');
            }
            $name = $file->getClientOriginalName();
            $video = Str::random(4)."_".$name;
            while(file_exists("upload/exercise/video".$video))
            {
                $video = Str::random(4)."_".$name;
            }
            $file->move("upload/exercise/video",$video);
            unlink("upload/exercise/video".$exercise->video);
            $exercise->video=$video;
        }
        $exercise->save();
        return redirect('page/edit_exercise/'.$id)->with('message','Edit Exercise Success');
    }

    public function watchVideo($id)
    {
        $exercise= Exercise::find($id);
        return view('videos.video',['exercise'=>$exercise]);
    }
}
