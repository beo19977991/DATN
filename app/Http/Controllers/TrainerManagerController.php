<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Exercise;
use App\TypeExercise;
use App\Course;
use App\Event;
use Illuminate\Support\Str;

class TrainerManagerController extends Controller
{
    public function getExercise()
    {
        $trainer_id = Auth::user()->id;
        $exercises = Exercise::where('idUser','=',$trainer_id)->get();
        return view('exercises.exercise_manager_list',['exercises'=>$exercises]);
    }
    public function getAddExercise()
    {
        $typeExercise = TypeExercise::all();
        return view('exercises.exercise_manager_add',['typeExercise'=>$typeExercise]);
    }
    public function postAddExercise(Request $request)
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
        return redirect('manager/exercise/add')->with('message','Add Exercise Success');
    }
    public function getEditExercise($id, Request $request)
    {
        $typeExercise = TypeExercise::all();
        $exercise= Exercise::find($id);
        return view('exercises.exercise_manager_edit',['typeExercise'=>$typeExercise,'exercise'=>$exercise]);
    }
    public function postEditExercise($id, Request $request)
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
        return redirect('manager/exercise/edit/'.$id)->with('message','Edit Exercise Success');
    }
    
    public function getDeleteExercise($id)
    {
        $exercise = Exercise::find(($id));
        $exercise->delete();
        return redirect('manager/exercise')->with('message','Delete Exercise Success');
    }

    public function getClasses()
    {
        $trainer_id = Auth::user()->id;
        $classes = Course::where('trainer_id','=',$trainer_id)->get();
        return view('trainer.manager_course_list',['classes'=>$classes]);
    }
    public function getClassesCalendar($id)
    {
        $type_exercises = TypeExercise::all();
        $classes = Course::find($id);
        $events = Event::where('course_id','=',$id)->get();
        $bg = ['bg-success','bg-warning','bg-info','bg-primary','bg-danger','bg-success','bg-warning','bg-info','bg-primary','bg-danger','bg-warning'];
        return view('trainer.calendar',['classes'=>$classes,'type_exercises'=>$type_exercises,'bg'=>$bg, 'events'=>$events]);
    }
    public function getClassesCalendarDelete($id)
    {
        $events = Event::where('course_id','=','$id')->get();
        foreach($events as $event)
        {
            $event->delete();
        }
        return redirect('page/course/'.$id);
    }
    public function postDeleteEvent ($id)
    {
        $event = Event::destroy($id);
        return $event;
    }
    public function getAddEvent($id)
    {
        $type_exercises = TypeExercise::all();
        $events = Event::where('course_id','=',$id)->get();
        $bg = ['bg-success','bg-warning','bg-info','bg-primary','bg-danger','bg-success','bg-warning','bg-info','bg-primary','bg-danger','bg-warning'];
        $course = Course::find($id);
        return view('trainer.add_new_event',['type_exercises'=>$type_exercises,'bg'=>$bg,'course'=>$course,'events'=>$events]);
    }
    public function postAddEvent($id, Request $request)
    {
        $event = new Event();
        $event->title= $request->title;
        $event->start= new DateTime($request->start_time);
        $event->end= new DateTime($request->start_time);
        $event->course_id = $request->$id;
        $event->save();
        return 1;
    }
}
