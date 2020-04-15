<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Auth;
use App\User;

class UserController extends Controller
{
    public function getList()
    {
        $user=User::all();
        return view('admin.user.list',['user'=>$user]);
    }
    public function getEdit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit',['user'=>$user]);
    }

    public function postEdit(Request $request, $id)
    {
        $this->validate($request,[
            'username'=>'required|min:6|max:32|unique:users,username',
            'name'=>'required|',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:32',
            'passwordAgain'=>'required|same:password',
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
            'password.required'=>'You have not enter password',
            'password.min'=>'Password have at lease 6 characters',
            'password.max'=>'Password have at most 32 characters',
            'passwordAgain.required'=>'You have not enter Password Again',
            'passwordAgain.same'=>'Password not corect',
            'phone.required'=>'You have not enter phone number',
            'phone.unique'=>'Phone number already exist',
            'address.required'=>'You have not enter Address',
            'address.min'=>'Address have at least 3 characters',
            'address.max'=>'Address have at most 32 characters',
        ]);
        $user = User::find($id);
        $user->username= $request->username;
        $user->name=$request->name;
        $user->email= $request->email;
        if($request->changePassword=="on")
        {
            $this->validate($request,[
                'password'=>'required|min:6|max:32',
                'passwordAgain'=>'required|same:password',
            ],[
                'password.required'=>'You have not enter password',
                'password.min'=>'Password have at lease 6 characters',
                'password.max'=>'Password have at most 32 characters',
                'passwordAgain.required'=>'You have not enter Password Again',
                'passwordAgain.same'=>'Password not corect',
            ]);
            $user->password = bcrypt($request->password);
        }
        $user->phone= $request->phone;
        $user->address=$request->address;
        $user->role=$request->role;
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
            unlink("upload/user/photo".$user->photo);
            $user->photo=$photo;
        }
        $user->save();
        return redirect('admin/user/edit'.$id)->with('message','Edit User Success');
    }

    public function getAdd()
    {
        return view('admin.user.add');
    }
    public function postAdd(Request $request)
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
        $user->username= $request->username;
        $user->name=$request->name;
        $user->email= $request->email;
        $user->password = bcrypt($request->password);
        $user->phone= $request->phone;
        $user->address=$request->address;
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
            $user->photo=$photo;
        }
        else
        {
            $user->photo="default.png";
        }
        $user->role=$request->role;
       $user->save();
       return redirect('admin/user/add')->with('message','Add user succes');
    }

    public function getDelete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/list')->with('message','Deleted user succes');
    }
    public function getLoginAdmin()
    {
        return view('admin.login');
    }
    public function postLoginAdmin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:6|max:32'
        ],[
            'email.required'=>'You have not enter email',
            'password.required'=>'You have not enter password',
            'password.min'=>'Password have at lease 6 characters',
            'password.max'=>'Password have at mosr 32 characters'
        ]);
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        if(Auth::attempt($credentials))
        {
            return redirect('admin/user/list');
        }
        else
        {
            return redirect('admin/login')->with('message','Login Unsuccessful');
        }
    }
    public function getLogoutAdmin()
    {
        Auth::logout();
        return redirect('admin/login');
    }

    public function getLoginUser()
    {
        return view('login');
    }
    public function getRegisterUser()
    {
        return view('register');
    }
}
