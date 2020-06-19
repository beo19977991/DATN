<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\TypeOfSchedule;
use App\TypeExercise;
use App\Exercise;
use App\Schedule;
use App\User;
use App\Course;
use App\Product;
use App\Post;

class HomeController extends Controller
{
    public function getHome()
    {
        $related_classes = Course::orderby('id', 'DESC')->take(3)->get();
        $typeSchedule= TypeOfSchedule::orderBy('id','DESC')
                        ->take(3)
                        ->get();
        $exercise = Exercise::orderBy('id',"DESC")
                        ->take(6)
                        ->get();
        $schedule = Schedule::where('id','=','13')->get();
        foreach($schedule as $index => $s) {
            $ar = [];
            foreach ($s->body as $key => $value) {
                $value = TypeExercise::whereIn("id", $value)->pluck("typeExerciseName");
                array_push($ar, $value);
            }
            $schedule[$index]->body = $ar;
        }
        $data = Collection::make(["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"]);
        $index = 0;
        $trainer = User::where('role','=','2')
                    ->get();
        $course = Course::orderBy('price','DESC')
                    ->take(3)
                    ->get();
        $product = Product::orderBy('id','DESC')
                            ->get();
        $customer_user = User::where('role','=','1')->get();
        $trainer_user = User::where('role','=','2')->get();
        $class = Course::all();
        $exercises = Exercise::all();
        $count_customer = count($customer_user);
        $count_trainer = count($trainer_user);
        $count_class = count($class);
        $count_exercise = count($exercise);
        $latest_news = Post::orderBy('updated_at','DESC')
                                    ->where('active','=','1')
                                    ->take(3)                           
                                    ->get();
        return view('index',['typeSchedule'=>$typeSchedule,'exercise'=>$exercise,'data'=>$data,
                             'index'=>$index, 'schedule'=>$schedule,'trainer'=>$trainer,'course'=>$course,
                             'product'=>$product, 'related_classes'=> $related_classes, 'count_exercise'=>$count_exercise,
                             'count_customer'=>$count_customer,'count_trainer'=>$count_trainer,'count_class'=>$count_class,
                             'latest_news'=>$latest_news,
                             ]);
    }
}
