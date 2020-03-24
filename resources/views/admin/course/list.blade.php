@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Course
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{session('message')}}
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th> ID</th>
                                <th> Staff Make Course</th>
                                <th> Course Name</th>
                                <th> Time</th>
                                <th> Price</th>
                                <th> Discount</th>
                                <th> Delete</th>
                                <th> Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($course as $c)
                            <tr class="odd gradeX" align="center">
                                <td>{{$c->id}}</td>
                                <td>{{$c->user->username}}</td>
                                <td>{{$c->courseName}}</td>
                                <td>{{$c->time}}</td>
                                <td>{{$c->price}}</td>
                                <td>{{$c->discount}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                <a href="admin/course/delete/{{$c->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                                <a href="admin/course/edit/{{$c->id}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection