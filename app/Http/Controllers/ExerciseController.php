<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Exercise;
use App\TypeExercise;
use Auth;

class ExerciseController extends Controller
{
    public function getList()
    {
        $exercise = Exercise::all();
        return view('admin.exercise.list',['exercise'=>$exercise]);
    }
    public function getAdd()
    {
        $typeExercise = TypeExercise::all();
        return view('admin.exercise.add',['typeExercise'=>$typeExercise]);
    }
    public function postAdd(Request $request)
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
            while(file_exists("upload/video".$video))
            {
                $video = Str::random(4)."_".$name;
            }
            $file->move("upload/video",$video);
            $exercise->video=$video;
        }
        else
        {
            $exercise->video="";
        }
        $exercise->save();
        return redirect('admin/exercise/add')->with('message','Add Exercise Success');
    }
    public function getEdit($id)
    {

    }
    public function postEdit(Request $request, $id)
    {

    }

    public function getDelete($id)
    {


    }
    
}
