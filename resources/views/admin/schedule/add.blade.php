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
                                <label>Monday</label>
                                <div style="display:flex">
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tuesday</label>
                                <div style="display:flex">
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Wednesday</label>
                                <div style="display:flex">
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Thursday</label>
                                <div style="display:flex">
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Friday</label>
                                <div style="display:flex">
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Saturday</label>
                                <div style="display:flex">
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Sunday</label>
                                <div style="display:flex">
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                    <select class="form-control schedule" name="typeExercise" id="typeExercise">
                                    @foreach($typeExercise as $type)
                                        <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                    @endforeach
                                    </select>
                                </div>
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