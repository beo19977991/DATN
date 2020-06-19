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
                        <li class="active">Customer</li>
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
                <h3 class="card-title">Customer Table</h3>
                &nbsp;&nbsp;&nbsp;
                <h3><a href="{{ route('add_customer') }}">Add Customer</a></h3>
                <input type="text" id="myInput" placeholder="Search for names..">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover myTable">
                  <thead>
                  <tr>
                    <th>Customer Name</th>
                    <th>Adress</th>
                    <th>Phone</th>
                    <th>Class</th>
                    <th>Trainer</th>                
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Cost</th>
                    <th>Duration</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($customers as $customer)
                  <tr>
                    <td><a target="_blank" href="{{ route('profile',['id' => $customer->id]) }}">{{$customer->name}}</a></td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->phone}}</td>
                    <td>{{$customer->customer_class->course_name}}</td>
                    <td>{{$customer->customer_class->trainer->name}}</td>
                    <td>{{\Carbon\Carbon::parse($customer->customer_class->start_time)->format('d/m/Y')}}</td>
                    <td>{{\Carbon\Carbon::parse($customer->customer_class->end_time)->format('d/m/Y')}}</td>
                    <td>{{$customer->customer_class->price}}</td>
                    <td>{{$customer->customer_class->discount}}</td>
                    <td>{{$customer->customer_class->price - ($customer->customer_class->price * $customer->customer_class->discount)}}</td>
                    @if(strtotime(\Carbon\Carbon::parse($customer->customer_class->end_time)->format('d/m/Y')) > strtotime(\Carbon\Carbon::parse($today)->format('d/m/Y')))
                      <td style="background-color:skyblue"></td>
                    @elseif(strtotime($customer->customer_class->end_time) === strtotime(\Carbon\Carbon::parse($today)->format('d/m/Y')))
                      <td style="background-color:yellow"></td>
                    @else
                      <td style="background-color:red"></td>
                    @endif
                    <td> <i class="ion-edit"><a href="page/customer/edit/{{$customer->id}}"> Edit</a></i></td>
                  </tr>
                  @endforeach
                  </tfoot>
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