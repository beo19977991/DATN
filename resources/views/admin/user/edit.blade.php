@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>{{$user->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                    <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/user/edit/{{$user->id}}" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>UserName</label>
                                <input class="form-control" name="username" value="{{$user->username}}" />
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" value="{{$user->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type ="email" class="form-control" name="email" value="{{$user->email}}"/>
                            </div>
                            <div class="form-group">
                            <input id="changePassword" type="checkbox" name ="changePassword">
                                <label>Change Password</label>
                                <input type="password" class="form-control password" name="password" placeholder="Enter Password" disabled="" />
                            </div>
                            <div class="form-group">
                                <label>Reset Password</label>
                                <input type="password" class="form-control password" name="passwordAgain" placeholder="Enter Password Again" disabled=""/>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input class="form-control" name="phone" value="{{$user->phone}}" />
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input  class="form-control" name="address" value="{{$user->address}}" />
                            </div>
                            <div class="form-group">
                                <label>Avatar</label>
                                <p><img style ="width:400px; height:200px" src="upload/photo/{{$user->photo}}" ></p>
                                <input class="form-control" type="file" name="photo" />
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <label class="radio-inline">
                                    <input name="role" value="0" type="radio"
                                    @if($user->role==0)
                                    {{"checked"}}
                                    @endif
                                    >Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="role" value="1" type="radio"
                                    @if($user->role==1)
                                    {{"checked"}}
                                    @endif
                                    >Customer
                                </label>
                                <label class="radio-inline">
                                    <input name="role" value="2" type="radio"
                                    @if($user->role==2)
                                    {{"checked"}}
                                    @endif
                                    >Trainer
                                </label>
                                <label class="radio-inline">
                                    <input name="role" value="3" type="radio"
                                    @if($user->role==3)
                                    {{"checked"}}
                                    @endif
                                    >Staff
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $("#changePassword").change(function(){
                if($(this).is(":checked"))             
                {
                    $(".password").removeAttr('disabled');
                }
                else
                {
                    $(".password").attr('disabled','');
                }
            });
        });
    </script>
@endsection