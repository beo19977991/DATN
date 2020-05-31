@extends('layouts.app', ['title' => 'Course'])
@section('styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">   
@endsection
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
                        <li class="active">New Course</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Inner Banner area -->
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
            <!-- Start details classes area -->
            <div class="news-detail-area padding-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="single-news-detail">
                                <div class="class-content">
                                    <div class="page-content">
                                        <form action="page/create_course" method="POST" enctype="multipart/form-data" >
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <div class="form-group">
                                                <label>Classes Name</label>
                                                <input type="text" class="form-control" name="course_name">
                                            </div>
                                            <div class="form-group">
                                                <label>Trainer</label>
                                                <select class="form-control" name="trainer" id="trainer">
                                                    @foreach($trainer as $tr)
                                                    <option value="{{$tr->id}}"> {{$tr->username}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Start Time</label>
                                                <input type="text" class="form-control" id="start_time" name="start_time" />
                                            </div>
                                            <div class="form-group">
                                                <label>End Time</label>
                                                <input type="text" class="form-control" id="end_time" name="end_time" />
                                            </div>
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input class="form-control" name="price" >
                                            </div>
                                            <div class="form-group">
                                                <label>Discount</label>
                                                <input class="form-control" name="discount" />
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Create">
                                            </div>
                                        </form>
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
@section('scripts')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
        $( function() {
        $( "#start_time" ).datepicker({ dateFormat: 'yy-mm-dd' });
        $( "#end_time" ).datepicker({ dateFormat: 'yy-mm-dd' });
        });
    </script>
@stop
