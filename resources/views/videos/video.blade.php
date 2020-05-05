@extends('layouts.app')
@section('title')
<title>GymStar| Class</title>
@endsection
@section('content')
    <!-- Start Inner Banner area -->
        <div class="inner-banner-area">
        <div class="container">
            <div class="row">
                <div class="innter-title">
                    <h2>Online Store</h2>
                </div>
                <div class="breadcrum-area">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href=""></a> Video</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Inner Banner area -->
                <!-- Start details classes area -->
            <div class="news-detail-area padding-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="single-news-detail">
                                <div class="class-content">
                                    <div class="page-content">
                                        <video class="img-responsive" controls>
                                            <source src="upload/exercise/video/{{$exercise->video}}">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection