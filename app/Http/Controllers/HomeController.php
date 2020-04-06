<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeOfSchedule;
use App\Exercise;

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
        return view('index',['typeSchedule'=>$typeSchedule,'exercise'=>$exercise]);
    }
}
