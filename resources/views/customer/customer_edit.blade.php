@extends('layouts.app', ['title' => 'Customer'])
@section('styles')
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
                    <h2>Customer</h2>
                </div>
                <div class="breadcrum-area">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Edit Customer</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Inner Banner area -->
<div class="our-classes-area padding-top">
    <div class="container">
        <div class="row">
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-9 col-md-6 col-sm-9">
            <div class="card">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">{{$customer->name}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="page/customer/edit/{{$customer->id}}" method="POST">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="card-body">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control"  disabled value="{{$customer->address}}">
                    </div>
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control"  disabled value="{{$customer->phone}}">
                    </div>
                    <div class="form-group">
                        <label>Class</label>
                        <input type="text" class="form-control"  disabled value="{{$customer->course->course_name}}">
                    </div>
                    <div class="form-group">
                        <label>Trainer</label>
                        <input type="text" class="form-control"  disabled value="{{$customer->course->trainer->name}}">
                    </div>
                    <div class="form-group">
                        <label>Start Time</label>
                        <input type="text" class="form-control" id="start_time" placeholder="{{\Carbon\Carbon::parse($customer->course->start_time)->format('d/m/Y')}}"name="start_time" />
                    </div>
                    <div class="form-group">
                        <label>End Time</label>
                        <input type="text" class="form-control" id="end_time"placeholder="{{\Carbon\Carbon::parse($customer->course->end_time)->format('d/m/Y')}}" name="end_time" />
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" id="end_time"placeholder="{{$customer->course->price}}" name="end_time" />
                    </div>
                    <div class="form-group">
                        <label>Discount</label>
                        <input type="text" class="form-control" id="end_time"placeholder="{{$customer->course->discount}}" name="end_time" />
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
</div>
</div>
</div>
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