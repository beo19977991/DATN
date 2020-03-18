@extends('layouts.app')
@section('title')
<title>GymStar| Error</title>
@endsection
@section('content')

            <!-- Start Inner Banner area -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="innter-title">
                            <h2>Error Page</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">404 page</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inner Banner area -->
            <!-- Start 404 page area -->
            <div class="error-page-area padding-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="error-page">
                                <div class="error-content">
                                    <h1>404</h1>
                                    <p>Sorry Page Was Not Found</p>
                                </div>
                                <div class="error-info">
                                    <p>The page you are looking is not available or has been removed.<br> Try going to Home Page by using the button below.</p>
                                    <a class="error-button" href="{{route('home')}}">Go To Home Page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start 404 page area -->
@endsection
