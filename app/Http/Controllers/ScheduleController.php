<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Schedule;
use App\TypeExercise;
use App\TypeOfSchedule;
use Illuminate\Support\Collection;
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
        $data = Collection::make(["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"]);
        return view('admin.schedule.add',['schedule'=>$schedule,'typeSchedule'=>$typeSchedule,'typeExercise'=>$typeExercise,'data'=>$data]);
    }
    public function postAdd(Request $request)
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
        return redirect('admin/schedule/add')->with('message','Success');
    }
    public function getDelete($id)
    {

    }
}
