<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeOfSchedule;

class TypeScheduleController extends Controller
{
    public function getList()
    {
        $typeSchedule=TypeOfSchedule::all();
        return view('admin.type-schedule.list',['typeSchedule'=>$typeSchedule]);
    }
    public function getAdd()
    {
        $typeSchedule=TypeOfSchedule::all();
        return view('admin.type-schedule.add',['typeSchedule'=>$typeSchedule]);
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,[
            'type_schedule'=>'required'
        ],[
            'type_schedule.required'=>'You have not enter Type Schedule Name'
        ]);
        $typeSchedule = new TypeOfSchedule;
        $typeSchedule->typeOfScheduleName= $request->type_schedule;
        $typeSchedule->save();
        return redirect('admin/type-schedule/add')->with('message','Add Type Schedule Success');
    }
    public function getEdit($id)
    {
        $typeSchedule =TypeOfSchedule::find($id);
        return view('admin.type-schedule.edit',['typeSchedule'=>$typeSchedule]);
    }
    public function postEdit(Request $request, $id)
    {
        $this->validate($request,[
            'type_schedule'=>'required'
        ],[
            'type_schedule.required'=>'You have not enter Type Schedule Name'
        ]);
        $typeSchedule =TypeOfSchedule::find($id);
        $typeSchedule->typeOfScheduleName=$request->type_schedule;
        $typeSchedule->save();
        return redirect('admin/type-schedule/edit/'.$id)->with('message','Edit Type Schedule Success');
    }
    public function getDelete($id)
    {
        $typeSchedule=TypeOfSchedule::find($id);
        $typeSchedule->delete();
        return redirect('admin/type-schedule/list')->with('message','Delete Type Schedule Succsess');
    }
}
