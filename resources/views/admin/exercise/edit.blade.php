@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Exercise
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
                        <form action="admin/exercise/edit/{{$exercise->id}}" method="POST" enctype="multipart/form-data" >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Type Exercise</label>
                                <select class="form-control" name="typeExercise" id="typeExercise">
                                @foreach($typeExercise as $type)
                                <option
                                    @if($exercise->typeExercise->id== $type->id)
                                    {{"selected"}}
                                    @endif
                                 value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" value="{{$exercise->title}}" />
                            </div>
                            <div class="form-group">
                                <label>Preview</label>
                                <textarea class="form-control" name="preview" >{{$exercise->preview}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Video</label>
                                <input class="form-control" type="file" name="video" />
                                <iframe src="upload/video/{{$exercise->video}}" frameborder="0"></iframe>
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
@section('script')
<script>
    $(document).ready(function(){
        $("#typeExercise").change(function(){
            var idTypeExercise= $(this).val();
            $.get("admin/ajax/typeexercise"+idTypeExercise, function(data){
                $("#typeExercise").html(data);
            })
        });
    });
</script>
@endsection