@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(count($errors) >0)
                        <div class ="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}</br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/user/add" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>UserName</label>
                                <input class="form-control" name="username" placeholder="Please enter your username" />
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please enter your name" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type ="email" class="form-control" name="email" placeholder="Please enter your email" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Please enter password" />
                            </div>
                            <div class="form-group">
                                <label>Reset Password</label>
                                <input type="password" class="form-control" name="passwordAgain" placeholder="Please enter reset password" />
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input class="form-control" name="phone" placeholder="Please enter phone number" />
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input  class="form-control" name="address" placeholder="Please enter address" />
                            </div>
                            <div class="form-group">
                                <label>Avatar</label>
                                <input class="form-control" type="file" name="photo" />
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <label class="radio-inline">
                                    <input name="role" value="0" checked="" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="role" value="1" type="radio">Customer
                                </label>
                                <label class="radio-inline">
                                    <input name="role" value="2" type="radio">Trainer
                                </label>
                                <label class="radio-inline">
                                    <input name="role" value="3" type="radio">Staff
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection