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
use App\Event;
use DateTime;
use App\Product;
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
        $customers = [];
        $users = User::where('role','=',1)->get();
        foreach($users as $user)
        {
            $arr =[];
            $arr = json_decode($user->classes_id);
            if(array_pop($arr)!= null)
            {
                array_push($customers, $user);
            }
        }
        return view('customer.customer',['customers'=>$customers , 'date_end'=>$date_end,'today'=>$today]);
    }
    public function getEditCustomer($id)
    {
        $classes = Course::all();
        $customer = User::find($id);
        return view('customer.customer_edit',['customer'=>$customer,'classes'=>$classes]);
    }
    public function postEditCustomer($id, Request $request)
    {
        $customer = User::findOrFail($id);
        $old_course_id = $customer->course_id;
        $old_course = Course::where('id',$old_course_id)->first();
        $old_member_array = json_decode($old_course->member);
        $key_old_arr = array_search($id, $old_member_array);
        unset($old_member_array[$key_old_arr]);
        $old_course->member =json_encode($old_member_array);
        $old_course->save();
        $new_course = Course::findOrFail($request->classes);
        $new_member_arr = json_decode($new_course->member);
        array_push($new_member_arr, $id);
        $new_course->member = json_encode($new_member_arr);
        $new_course->save();
        $customer->course_id = $request->classes;
        $customer->save();
        return redirect('page/customer');
    }
    public function getAddCustomer()
    {
        $course = Course::all();
        return view('customer.customer_add',['course'=>$course]);
    }

    public function postAddCustomer(Request $request)
    {
        $this->validate($request,[
            'username'=>'required|min:6|max:32|unique:users,username',
            'name'=>'required|',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required|max:10|unique:users,phone',
            'address'=>'required|min:3|max:32',

        ],[
            'username.required'=>'You have not enter username',
            'username.min'=>'Username have at least 6 characters',
            'username.max'=>'Username have at most 32 characters',
            'username.unique'=>'Username already exist',
            'name.required'=>'You have not enter name',
            'email.required'=>'You have not enter email',
            'email.email'=>'You have not entered the correct email format',
            'email.unique'=>'Email already exist',
            'phone.required'=>'You have not enter phone number',
            'phone.unique'=>'Phone number already exist',
            'address.required'=>'You have not enter Address',
            'address.min'=>'Address have at least 3 characters',
            'address.max'=>'Address have at most 32 characters',
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->address = $request->address;
        if($request->hasFile('photo'))
        {
            $file=$request->file('photo');
            $extension= $file->getClientOriginalExtension();
            if($extension != 'jpg' && $extension != 'png' && $extension != 'jepg')
            {
                return redirect('admin/user/add')->with('error','You just select file have extension jpg, png, jepg');
            }
            $name = $file->getClientOriginalName();
            $photo = Str::random(4)."_".$name;
            while(file_exists("upload/user/photo".$photo))
            {
                $photo = Str::random(4)."_".$name;
            }
            $file->move("upload/user/photo",$photo);
            $user->photo = $photo;
        }
        else
        {
            $user->photo="default.png";
        }
        $user->role = 1;
        $user->course_id = $request->classes;
        $user->classes_id= [];
        $user->active = 1;
       $user->save();
       return redirect('admin/user/add')->with('message','Add user succes');
    }

    public function getClasses($id_classes)
    {
        $classes = Course::where('id','=',$id_classes)->get();
    }

    public function getTrainer()
    {
        $trainers = User::where('role','=',2)->get();
        return view('trainer.trainer',['trainers'=>$trainers]);
    }

    public function getCourseManager()
    {
        $courses = Course::all();
        return view('course.course_manager',['courses'=>$courses]);
    }
    public function getEditCourseManager($id)
    {
        $trainer = User::where('role','=','2')->get();
        $course = Course::where('id','=',$id)->first();
        return view('course.course_manager_edit',['course'=>$course,'trainer'=>$trainer]);
    }

    public function postEditCourseManager($id, Request $request)
    {
        $course = Course::where('id','=',$id)->first();
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
        return redirect ('page/course_manager');
    }
    public function getDeleteCourseManager($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect('page/course_manager');
    }
    public function getBmrSheet()
    {
        return view('bmr.bmr_sheet');
    }
    public function getCalendar($id)
    {
        $type_exercises = TypeExercise::all();
        $bg = ['bg-success','bg-warning','bg-info','bg-primary','bg-danger','bg-success','bg-warning','bg-info','bg-primary','bg-danger','bg-warning'];
        $course = Course::findOrFail($id);
        return view('schedule.create_calendar',['type_exercises'=>$type_exercises,'bg'=>$bg,'course'=>$course]);
    }
    public function postCreate(Request $request)
    {
        $event = new Event();
        $event->title= $request->title;
        $event->start= new DateTime($request->start_time);
        $event->end= new DateTime($request->start_time);
        $event->course_id = $request->course_id;
        $event->save();
        return 1;
    }
    public function postUpdate()
    {
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $event  = Event::where($where)->update($updateArr);
 
        return Response::json($event);
    }
    public function postDelete()
    {
        $event = Event::where('id',$request->id)->delete();
   
        return Response::json($event);
    }

    public function getProduct()
    {
        $classes = Course::orderBy('created_at','DESC')->take(5)->get();
        $best_class = Course::orderBy('discount','DESC')->first();
        $products = Product::all();
        return view('store',['products'=>$products,'classes'=>$classes,'best_class'=>$best_class]);
    }
    public function getProductDetail($id)
    {
        $classes = Course::orderBy('created_at','DESC')->take(5)->get();
        $best_class = Course::orderBy('discount','DESC')->first();
        $product = Product::find($id);
        $relalted_product = Product::orderBy('price','DESC')->take(3)->get();
        return view('productdetail',['product'=>$product,'relalted_product'=>$relalted_product,'classes'=>$classes,'best_class'=>$best_class]);
    }
}
