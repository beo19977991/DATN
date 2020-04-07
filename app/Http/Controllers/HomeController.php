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

class HomeController extends Controller
{
    public function getHome()
    {
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
        $course = Course::orderBy('id','DESC')
                    ->take(3)
                    ->get();
        $product = Product::orderBy('id','DESC')
                            ->get();
        return view('index',['typeSchedule'=>$typeSchedule,'exercise'=>$exercise,'data'=>$data,
                             'index'=>$index, 'schedule'=>$schedule,'trainer'=>$trainer,'course'=>$course,
                             'product'=>$product,                         
                             ]);
    }
}
