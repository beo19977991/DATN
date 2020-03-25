@extends('admin.layouts.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Post
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
                                <th> UserName</th>
                                <th> Title</th>
                                <th> Preview</th>
                                <th> Body</th>
                                <th> Photo</th>
                                <th> Likes</th>
                                <th> Delete</th>
                                <th> Block</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($post as $p)
                            <tr class="odd gradeX" align="center">
                                <td>{{$p->id}}</td>
                                <td>{{$p->user->username}}</td>
                                <td>{{$p->title}}</td>
                                <td>{{$p->preview}}</td>
                                <td>{{$p->body}}</td>
                                <td><img style="width:150px;height:100px" src="upload/post/photo/{{$p->photo}}"></td>
                                <td>{{$p->likes}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i>
                                <a href="admin/post/delete/{{$p->id}}"> Delete</a></td>

                                <td class="center">
                                <label class="switch">
                                    <input class="switchblock" type="checkbox"  idpost="{{$p->id}}" 
                                    @if($p->active==0)
                                    {{"checked"}}
                                    @endif
                                    />
                                    <span class="slider round"></span>
                                </label>
                                </td>
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
@section('ajax')
    <script>
        $(document).ready(function(){
        //    $('.switch').on('change', () => console.log($(this).is(":checked")))
           $('.switchblock').on('change',function(){
                var idPost = $(this).attr("idpost");
                $.ajax({url:"admin/ajax/post/"+idPost, success:function(data){
                    $('.switchblock').html(data);
                    console.log("admin/ajax/post/"+idPost);
                }});
           });
        });
    </script>

@endsection