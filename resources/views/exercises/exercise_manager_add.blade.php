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
                    <h2>Exercise</h2>
                </div>
                <div class="breadcrum-area">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">New Exercise</li>
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
                                        <form action="manager/exercise/add" method="POST" enctype="multipart/form-data" >
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <div class="form-group">
                                            <label>Type Exercise</label>
                                                <select class="form-control" name="typeExercise" id="typeExercise">
                                                @foreach($typeExercise as $type)
                                                <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input class="form-control" name="title" />
                                            </div>
                                            <div class="form-group">
                                                <label>Preview</label>
                                                <textarea class="form-control" name="preview" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Video</label>
                                                <input class="form-control" type="file" name="video" />
                                            </div>
                                            <button type="submit" class="btn btn-default">Add</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
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
