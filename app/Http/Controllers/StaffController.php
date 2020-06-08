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

class StaffController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function getCustomer()
    {
        $date_end = date("d/m/y");
        $today = date_create()->format('Y-m-d H:i:s');
       // dd($today);
        $customers = User::where('role','=',1)
                            ->where('course_id','>',0)
                            ->get();
        return view('customer.customer',['customers'=>$customers , 'date_end'=>$date_end,'today'=>$today]);
    }
    public function getEditCustomer($id)
    {
        $customer = User::find($id);
        return view('customer.customer_edit',['customer'=>$customer]);
    }
    public function getdeleteCustomer($id)
    {
        $customer = User::find($id);
        $course = Course::find($customer->course_id);
        $arr = json_decode($course->member);
        $key=array_search($id,$arr);
        unset($arr[$key]);
        $course->member = json_encode($arr);
        $course->save();
        $customer->course_id = 0;
        $customer->save();
        return redirect('page/customer');
    }

    public function getTrainer()
    {
        $trainers = User::where('role','=',2)->get();
        return view('trainer.trainer',['trainers'=>$trainers]);
    }

    public function getCourseManager()
    {
        $today = date_create()->format('Y-m-d H:i:s');
        $courses = Course::all();
        return view('course.course_manager',['courses'=>$courses, 'today'=>$today]);
    }
    public function getBmrSheet()
    {
        return view('bmr.bmr_sheet');
    }
}
