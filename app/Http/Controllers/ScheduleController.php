<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\TypeExercise;
use App\TypeOfSchedule;
use Auth;

class ScheduleController extends Controller
{
    public function getList()
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
        return view('admin.schedule.list',['schedule'=>$schedule]);
    }
    public function getAdd()
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
        return view('admin.schedule.add',['schedule'=>$schedule,'typeSchedule'=>$typeSchedule,'typeExercise'=>$typeExercise]);
    }
    public function postAdd(Request $request)
    {
        $schedule = new Schedule;
        $schedule->idUser = Auth::user()->id;
        $schedule->idTypeSchedule=$request->typeSchedule;
        //$schedule->body=$request->
        // $arrSub= 
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
