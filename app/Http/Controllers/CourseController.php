<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\User;
use Auth;

class CourseController extends Controller
{
    public function getList()
    {
        $course = Course::all();
        return view('admin.course.list',['course'=>$course]);
    }
    public function getAdd()
    {
        return view('admin.course.add');
    }
    public function postAdd(Request $request)
    {
        $this->validate($request,[
            'course_name'=>'required',
            'time'=>'required',
            'price'=>'required',
            'discount'=>'required',
        ],[
            'course_name.required'=>'You have not enter Course Name',
            'time.required'=>'You have not enter Time of Course',
            'price.required'=>'You have not enter Price of Course',
            'discount.required'=>'You have not enter Discount',
        ]);
        $course = new Course;
        $course->idUser= (Auth::user()->id);
        $course->courseName=$request->course_name;
        $course->time=$request->time;
        $course->price=$request->price;
        $course->discount=$request->discount;
        $course->save();
        return redirect('admin/course/add')->with('message','Add Course Success');
    }

    public function getEdit($id)
    {
        $course = Course::find($id);
        return view('admin.course.edit',['course'=>$course]);
    }
    public function postEdit(Request $request, $id)
    {
        $this->validate($request,[
            'course_name'=>'required',
            'time'=>'required',
            'price'=>'required',
            'discount'=>'required',
        ],[
            'course_name.required'=>'You have not enter Course Name',
            'time.required'=>'You have not enter Time of Course',
            'price.required'=>'You have not enter Price of Course',
            'discount.required'=>'You have not enter Discount',
        ]);

        $course = Course::find($id);
        $course->idUser= Auth::user()->id;
        $course->courseName=$request->course_name;
        $course->time=$request->time;
        $course->price=$request->price;
        $course->discount=$request->discount;
        $course->save();
       return redirect('admin/course/edit/'.$id)->with('message','Edit Course Success');
    }
    public function getDelete($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect('admin/course/list')->with('message','Delete Course Success');
    }
}
