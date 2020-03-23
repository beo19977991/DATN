@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Type Exercise
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
                            <tr>
                                <th style = "text-align: center;"> ID</th>
                                <th style = "text-align: center;"> Type Exercise Name</th>
                                <th style = "text-align: center;"> Delete</th>
                                <th style = "text-align: center;"> Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($typeExercise as $te)
                            <tr class="odd gradeX" style = "text-align: center;">
                                <td>{{$te->id}}</td>
                                <td>{{$te->typeExerciseName}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                <a href="admin/type-exercise/delete/{{$te->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                                <a href="admin/type-exercise/edit/{{$te->id}}">Edit</a></td>
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