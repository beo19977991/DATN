@extends('layouts.app', ['title' => 'Course'])
@section('styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
                        <li class="active">Edit Course</li>
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
                                        <form action="page/course_manager/edit/{{$course->id}}" method="POST" enctype="multipart/form-data" >
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <div class="form-group">
                                                <label>Classes Name</label>
                                                <input type="text" class="form-control" name="course_name" value="{{$course->course_name}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Trainer</label>
                                                <select class="form-control" name="trainer" id="trainer">
                                                    @foreach($trainer as $tr)
                                                    <option 
                                                    @if($tr->id === $course->trainer_id)
                                                    {{"selected"}}
                                                    @endif
                                                    value="{{$tr->id}}"> {{$tr->username}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="card-body pad">
                                                <label>Introduct Classes</label>
                                                <div class="mb-3">
                                                    <textarea class="textarea" name="body" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                     {{$course->body}}       
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Start Time</label>
                                                <input type="text" class="form-control" id="start_time" name="start_time" value ="{{$course->start_time}}" />
                                            </div>
                                            <div class="form-group">
                                                <label>End Time</label>
                                                <input type="text" class="form-control" id="end_time" name="end_time" value ="{{$course->start_time}}"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Price</label>
                                                <input class="form-control" name="price" value="{{$course->price}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Discount</label>
                                                <input class="form-control" name="discount" value="{{$course->discount}}"/>
                                            </div>
                                            <div class="custom-file">
                                            <label>Image</label>
                                                <p><img style ="width:400px; height:200px" src="upload/course/photo/{{$course->photo}}" ></p>
                                                <input type="file" name="photo" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Edit Classes">
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
@section('editor')
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
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
