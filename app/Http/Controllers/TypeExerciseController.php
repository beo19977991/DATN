<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeExercise;

class TypeExerciseController extends Controller
{
    public function getList()
    {
        $typeExercise= TypeExercise::all();
        return view('admin.type-exercise.list',['typeExercise'=>$typeExercise]);
    }
    public function getAdd()
    {
        $typeExercise= TypeExercise::all();
        return view('admin.type-exercise.add',['typeExercise'=>$typeExercise]);
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,[
            'type_exercise'=>'required',
        ],[
            'type_exercise.required'=>'You have not enter Type Exercise Name'
        ]);
        $typeExercise = new TypeExercise;
        $typeExercise->typeExerciseName = $request->type_exercise;
        $typeExercise->save();
        return redirect('admin/type-exercise/add')->with('message','Add Type Exercise Success');
    }
    public function getEdit($id)
    {
        $typeExercise = TypeExercise::find($id);
        return view('admin.type-exercise.edit',['typeExercise'=>$typeExercise]);
    }
    public function postEdit(Request $request, $id)
    {    
        $this->validate($request,[
            'type_exercise'=>'required',
        ],[
            'type_exercise.required'=>'You have not enter Type Exercise Name'
        ]);
        $typeExercise = TypeExercise::find($id);
        $typeExercise->typeExerciseName = $request->type_exercise;
        $typeExercise->save();
        return redirect('admin/type-exercise/edit/'.$id)->with('message','Edit Type Exercise Success');
    }
    public function getDelete($id)
    {
        $typeExercise =TypeExercise::find($id);
        $typeExercise->delete();
        return redirect('admin/type-exercise/list')->with('message','Delete Success');
    }
}
