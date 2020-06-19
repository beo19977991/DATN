@extends('layouts.app', ['title' => 'Customer'])
@section('content')
    <!-- Start Inner Banner area -->
    <div class="inner-banner-area">
        <div class="container">
            <div class="row">
                <div class="innter-title">
                    <h2>Single page</h2>
                </div>
                <div class="breadcrum-area">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Add Customer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
            <div class="news-detail-area padding-top">
                <div class="container">
                    <div class="row">
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
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="single-news-detail">
                                <div class="class-content">
                                    <div class="page-content">
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
                                <label>Classes</label>
                                <select name="classes" id="classes">
                                @foreach($course as $c)
                                <option value="{{$c->id}}">{{$c->course_name}}</option>
                                @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                                </div>
                            </div>
                            <!-- end new sigle detail -->
                        </div>
                        <!-- end col 9 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- End details classes area -->
@endsection