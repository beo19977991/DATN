@extends('layouts.app', ['title' => 'Exercise'])
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
                    <h2>Exercise</h2>
                </div>
                <div class="breadcrum-area">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Exercise</li>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Exercise Table</h3>
                <input type="text" id="myInput" placeholder="Search for names..">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover myTable">
                  <thead>
                  <tr>
                    <th> Classes Name</th>
                    <th> Preview</th>
                    <th> Start Time</th>
                    <th> End Time</th>
                    <th> Create</th>
                    <th> Add</th>
                    <th> Delete</th>
                    <th> Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                        @foreach($classes as $c)
                        <tr class="odd gradeX" align="center">
                            <td><a target="_blank" href="{{ route('course_details', ['id' => $c->id]) }}"> {{$c->course_name}}</a></td>
                            <td>{{$c->body}}</td>
                            <td>{{$c->start_time}}</td>
                            <td>{{$c->end_time}}</td>
                            <td class="center">
                                <a href="calendar/{{$c->id}}">Create New Calendar</a>
                            </td>
                            <td class="center">
                                <a href="manager/classes/calendar/add-event/{{$c->id}}">Add Event</a>
                            </td>
                            <td class="center"><i class="ion-delete"></i>
                                <a href="manager/classes/calendar/delete{{$c->id}} "> Delete Calendar</a></td>
                            <td class="center"><i class="ion-edit"></i> 
                                <a href="manager/classes/calendar/{{$c->id}}">Delete Event</a>
                            </td>
                        </tr>
                        @endforeach
                </table>
              </div>
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
@section('scripts')
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#myInput').keyup(function(event){
      event.preventDefault();
      /* Act on the event */
      var tukhoa = $(this).val().toLowerCase();
      $('.myTable tr').filter(function() {
         $(this).toggle($(this).text().toLowerCase().indexOf(tukhoa)>-1);
      });
    });
  });
</script>
@endsection