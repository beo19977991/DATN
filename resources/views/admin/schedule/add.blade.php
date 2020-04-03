@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Schedule
                            <small>Add</small>
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
                        <form action="admin/schedule/add" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Type Schedule</label>
                                <select class="form-control" name="typeSchedule" id="typeSchedule">
                                @foreach($typeSchedule as $type)
                                    <option value="{{$type->id}}"> {{$type->typeOfScheduleName}}</option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                    @foreach($data as $item)
                                    
                                    <label>{{$item}}</label>
                                            <div>
                                                <select id="{{$item}}" class="{{$item}}" style="width:50%" class="browser-default custom-select" multiple name="selectItem[{{$item}}][]">
                                                    @foreach($typeExercise as $type)
                                                    <option  value="{{$type->id}}">{{$type->typeExerciseName}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                    @endforeach
                            </div>
                            <button type="submit" class="btn btn-default">Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('.monday').select2();
            $('.tuesday').select2();
            $('.wednesday').select2();
            $('.thursday').select2();
            $('.friday').select2();
            $('.saturday').select2();
            $('.sunday').select2();
        });
    </script>
@endsection