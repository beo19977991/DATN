@extends('layouts.app')
@section('title')
<title>GymStar| Create Post</title>
@endsection
@section('content')
            <!-- Start Inner Banner area -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="innter-title">
                            <h2>Single page</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">New Post</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inner Banner area -->
            <!-- Start Single page area -->
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
            <div class="single-page-area padding-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="single-page">
                                <div class="page-content">
                                    <div class="page-header">
                                    </div>
                                    <form action="" method="POST" enctype="multipart/form-data" id="uploadForm" >
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" id="title" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label>Preview</label>
                                            <textarea name="preview" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="ckeditor" name="body" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input  type="file"  id="file" name="photo" />
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Post">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Single page area -->

@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function filePreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#uploadForm + img').remove();
                    $('#uploadForm').after('<img src="'+e.target.result+'" width="450" height="300"/>');
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#file").change(function () {
            filePreview(this);
        });
    </script>
@endsection