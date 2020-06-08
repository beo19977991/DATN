<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post;
use App\Exercise;
use App\TypeExercise;
use App\Schedule;
use App\TypeOfSchedule;
use App\Course;
use Illuminate\Support\Collection;


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
    public function getDeleteExercise($id)
    {
        $id_user_login = Auth::user()->id;
        $exercise = Exercise::find($id);
        $exercise->delete();
        return redirect('page/profile/'.$id_user_login)->with('message','Delete Exercise Success');
    }
    // start function for schedule
    public function getListSchedule()
    {
        $schedule = Schedule::all();

        foreach($schedule as $index => $s) {
            $ar = [];
            foreach ($s->body as $key => $value) {
                $value = TypeExercise::whereIn("id", $value)->pluck("typeExerciseName");
                array_push($ar, $value);
            }
            $schedule[$index]->body = $ar;
        }
        $data = Collection::make(["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"]);
        return view('schedule',['schedule'=>$schedule,'data'=>$data]);
    }

    public function getCreateSchedule()
    {
        $typeSchedule = TypeOfSchedule::all();
        $typeExercise =TypeExercise::all();
        $schedule = Schedule::all();

        foreach($schedule as $index => $s) {
            $ar = [];
            foreach ($s->body as $key => $value) {
                $value = TypeExercise::whereIn("id", $value)->pluck("typeExerciseName");
                array_push($ar, $value);
            }
            $schedule[$index]->body = $ar;
        }
        $data = Collection::make(["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"]);
        return view('schedule.new_schedule',['schedule'=>$schedule,'typeSchedule'=>$typeSchedule,'typeExercise'=>$typeExercise,'data'=>$data]);
    }
    public function postCreateSchedule(Request $request)
    {
        $schedule = new Schedule;
        $schedule->idUser = Auth::user()->id;
        $schedule->idTypeSchedule=$request->typeSchedule;
        $items= $request->selectItem;
        $arr =[];
        foreach($items as $i =>$value)
        {
            array_push($arr, array_map('intval', $value));
        }
        $schedule->body= $arr;
        $schedule->save();
        return redirect('schedule/create_schedule')->with('message','Success');
    }
    // ===========================================================
// ========================COURSE=============================
    public function getCreateCourse()
    {
        $trainer = User::where('role','=','2')->get();
        return view('course.create_course',['trainer'=>$trainer]);
    }
    public function postCreateCourse(Request $request)
    {
        $course = new Course;
        $course->staff_id= Auth::user()->id;
        $course->course_name = $request->course_name;
        $course->trainer_id = $request->trainer;
        $course->body= $request->body;
        $course->start_time= $request->start_time;
        $course->end_time= $request->end_time;
        $course->price = $request->price;
        $course->discount = $request->discount;
        if($request->hasFile('photo'))
        {
            $file=$request->file('photo');
            $extension= $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension != 'jepg')
            {
                return redirect('page/create_course')->with('error','You just select file have extension jpg, png, jepg');
            }
            $name = $file->getClientOriginalName();
            $photo = Str::random(4)."_".$name;
            while(file_exists("upload/course/photo".$photo))
            {
                $photo = Str::random(4)."_".$name;
            }
            $file->move("upload/course/photo",$photo);
            $course->photo=$photo;
        }
        else
        {
            $course->photo="";
        }
        $arr = [];
        $course->member = json_encode($arr);
        $course->save();
        return redirect('page/create_course_update');
    }
    public function update_trainer()
    {
        $course = Course::all();
        $trainer = User::where('role','=',2)->get();
        foreach($course as $c)
        {
            foreach($trainer as $tr)
            {
                if($c->trainer_id == $tr->id)
                {
                    $tr->course_id  = $c->id;
                    $tr->save();
                }
            }
           
        }
        return redirect('page/create_course')->with('message','Create Course success !!!');
    }
    public function getCourse()
    {
        $course = Course::all();
        return view('course.course',['course'=>$course]);
    }
    public function getCourseDetail($id)
    {
        $course = Course::find($id);
        $members = User::where('role','=',1)
                        ->where('course_id','=',$id)
                        ->get();
        return view('course.course_detail',['course'=>$course,'members'=>$members]);
    }
    public function getJoinClass($id)
    {
        $user_id = Auth::user()->id;
        $user_join_class = User::where('id','=',$user_id)->first();
        $course = Course::find($id);
        $arr =json_decode($course->member);
        if($user_join_class->role === 1 && count($arr) < 10 && $user_join_class->course_id ==0)
        {
            $user_join_class->course_id = $id;
            array_push($arr, $user_id);
            $course->member = json_encode($arr);
            $user_join_class->save();
            $course->save();
        }
        return redirect('page/course/'.$id);
    }
}
