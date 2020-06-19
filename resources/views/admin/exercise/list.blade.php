@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Exercise
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
                                <th> Trainer</th>
                                <th> Type Exercise</th>
                                <th> Title</th>
                                <th> Preview</th>
                                <th> Video</th>
                                <th> Delete</th>
                                <th> Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($exercise as $ex)
                            <tr class="odd gradeX" align="center">
                                <td>{{$ex->id}}</td>
                                <td>{{$ex->user->username}}</td>
                                <td>{{$ex->typeExercise->typeExerciseName}}</td>
                                <td>{{$ex->title}}</td>
                                <td>{{$ex->preview}}</td>
                                <td><video src="upload/exercise/video/{{$ex->video}}" controls style="width:150px;height:100px"></video></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                <a href="admin/exercise/delete/{{$ex->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                                <a href="admin/exercise/edit/{{$ex->id}}">Edit</a></td>
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