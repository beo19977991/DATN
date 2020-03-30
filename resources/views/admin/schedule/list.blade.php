@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Schedule
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
                                <th> Type Of Schedule</th>
                                <th> Monday</th>
                                <th> Tuesday</th>
                                <th> Wednesday</th>
                                <th> Thursday</th>
                                <th> Friday</th>
                                <th> Saturday</th>
                                <th> Sunday</th>
                                <th> Delete</th>
                                <th> Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($schedule as $s)
                            <tr class="odd gradeX" align="center">
                                <td>{{$s->id}}</td>
                                <td>{{$s->user->username}}</td>
                                <td>{{$s->typeSchedule->typeOfScheduleName}}</td>
                                @for($i=0;$i<'7';$i++)
                                <td>
                                    @foreach($s->body[$i] as $sch)
                                        {{$sch}}
                                    @endforeach  
                                </td>
                                @endfor

                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                <a href="admin/schedule/delete/{{$s->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                                <a href="admin/schedule/edit/{{$s->id}}">Edit</a></td>
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