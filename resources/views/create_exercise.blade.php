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
                        <li class="active">New Exercise</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Inner Banner area -->
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
            <!-- Start details classes area -->
            <div class="news-detail-area padding-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="single-news-detail">
                                <div class="class-content">
                                    <div class="page-content">
                                        <form action="page/create_exercise" method="POST" enctype="multipart/form-data" >
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <div class="form-group">
                                                <label>Type Exercise</label>
                                                <select class="form-control" name="typeExercise" id="typeExercise">
                                                    @foreach($typeExercise as $type)
                                                    <option value="{{$type->id}}"> {{$type->typeExerciseName}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input class="form-control" name="title" />
                                            </div>
                                            <div class="form-group">
                                                <label>Preview</label>
                                                <textarea class="form-control" name="preview" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Video</label>
                                                <input class="form-control" type="file" name="video" />
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" value="Create">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end new sigle detail -->
                        </div>
                        <!-- end col 9 -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="right-sidebar">
                                <div class="single-sidebar">
                                    <h3>Search</h3>
                                    <div class="sidebar-search">
                                        <input type="text" placeholder="Search here...">
                                        <span><button type="submit"><i class="fa fa-search"></i></button></span>
                                    </div>
                                </div>
                                <div class="single-sidebar">
                                    <h3>Categories</h3>
                                    <div class="categories">
                                        <ul>
                                            <li><a href="news.html">Fitness Classes</a></li>
                                            <li><a href="news.html">Body Building</a></li>
                                            <li><a href="news.html">Trainer</a></li>
                                            <li><a href="news.html">Running</a></li>
                                            <li><a href="news.html">Yoga</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-sidebar">
                                    <h3>Archives</h3>
                                    <div class="archives-list">
                                        <table style="width:100%; border:0;">
                                            <tbody>
                                                <tr>
                                                    <td>February</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>January</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>March</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>November</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>December</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- End details classes area -->
@endsection