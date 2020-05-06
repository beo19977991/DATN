@extends('layouts.app')
@section('title')
<title>GymStar| Schedule</title>
@endsection
@section('content')
            <!-- Start Inner Banner area -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="innter-title">
                            <h2>Our Class Schedule</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Schedule</li>
                                @if($user_login->role==2)
                                    <li><a href="">Create Schedule</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inner Banner area -->
            <div class="class-schedule schedule-page padding-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="class-schedule-wrap">
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
                                    <div class="page-content">
                                        <form action="schedule/create_schedule" method="POST" enctype="multipart/form-data" >
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <div class="form-group">
                                                <label>Type Schedule</label>
                                                <select class="monday" name="typeSchedule" id="typeSchedule monday">
                                                @foreach($typeSchedule as $type)
                                                    <option value="{{$type->id}}"> {{$type->typeOfScheduleName}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                    @foreach($data as $item)
                                                    <label>{{$item}}</label>
                                                            <div>
                                                                <select id="{{$item}}" class="{{$item}}" style="width:50%" class="browser-default custom-select" multiple name="selectItem[{{$item}}][]">
                                                                    @foreach($typeExercise as $type)
                                                                    <option  value="{{$type->id}}">{{$type->typeExerciseName}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                    @endforeach
                                            </div>
                                            <div class="form-group">
                                                    <input type="submit" value="Create">
                                            </div>
                                        <form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
</br></br>
            <!-- End class schedule area -->
            <!-- Start Fitness class summer area -->
            <div class="fitness-summer-area padding-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="fitness-summer">
                                <div class="fitness-content">
                                    <h3>Fitness Classes This Summer.</h3>
                                    <p>Pay Now and<br> Get <span>35%</span> Discount</p>
                                    <a class="custom-button" data-title="Become A Member" href="#">Become A Member</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Fitness class summer area -->
            <!-- Start logo showcase area -->
            <div class="logo-showcase-area nav-on-focus">
                <div class="container">
                    <div class="gym-carousel nav-control-middle-opacity"
                        data-loop="true"
                        data-items="6"
                        data-margin="30"
                        data-autoplay="false"
                        data-autoplay-timeout="10000"
                        data-smart-speed="2000"
                        data-dots="false"
                        data-nav="true"
                        data-nav-speed="false"
                        data-r-x-small="2"
                        data-r-x-small-nav="true"
                        data-r-x-small-dots="false"
                        data-r-x-medium="3"
                        data-r-x-medium-nav="true"
                        data-r-x-medium-dots="false"
                        data-r-small="4"
                        data-r-small-nav="true"
                        data-r-small-dots="false"
                        data-r-medium="5"
                        data-r-medium-nav="true"
                        data-r-medium-dots="false"
                        data-r-large="6"
                        data-r-large-nav="true"
                        data-r-large-dots="false">
                        <div class="single-logo-area">
                            <div class="single-logo">
                                <a href="#"><img src="img/client/1.jpg" alt="client1"></a>
                            </div>
                        </div>
                        <div class="single-logo-area">
                            <div class="single-logo">
                                <a href="#"><img src="img/client/2.jpg" alt="client2"></a>
                            </div>
                        </div>
                        <div class="single-logo-area">
                            <div class="single-logo">
                                <a href="#"><img src="img/client/3.jpg" alt="client3"></a>
                            </div>
                        </div>
                        <div class="single-logo-area">
                            <div class="single-logo">
                                <a href="#"><img src="img/client/4.jpg" alt="client4"></a>
                            </div>
                        </div>
                        <div class="single-logo-area">
                            <div class="single-logo">
                                <a href="#"><img src="img/client/5.jpg" alt="client5"></a>
                            </div>
                        </div>
                        <div class="single-logo-area">
                            <div class="single-logo">
                                <a href="#"><img src="img/client/6.jpg" alt="client6"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End logo showcase area -->
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script>
        $(document).ready(function(){
            $('.monday').select2();
            $('.tuesday').select2();
            $('.wednesday').select2();
            $('.thursday').select2();
            $('.friday').select2();
            $('.saturday').select2();
            $('.sunday').select2();
        });
        $(document).ready(function(){
            console.log('oke');
        });
</script>
@endsection