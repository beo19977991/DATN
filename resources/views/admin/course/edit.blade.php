@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Course
                            <small>Edit</small>
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
                        <form action="admin/course/edit/{{$course->id}}" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                            <div class="form-group">
                                <label>Course Name</label>
                                <input class="form-control" name="course_name" value="{{$course->courseName}}" />
                            </div>
                            <div class="form-group">
                                <label>Time</label>
                                <input class="form-control" name="time" value="{{$course->time}}"/>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" value="{{$course->price}}"/>
                            </div>
                            <div class="form-group">
                                <label>Discount</label>
                                <input class="form-control" name="discount" value="{{$course->discount}}" />
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