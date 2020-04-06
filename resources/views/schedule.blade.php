@extends('layouts.app')
@section('title')
<title>GymStar| Schedule</title>
@endsection
@section('content')
            <!-- Start Inner Banner area -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="innter-title">
                            <h2>Our Class Schedule</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Schedule</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inner Banner area -->
            <!-- Start class schedule area -->
            <div class="class-schedule schedule-page padding-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="class-schedule-wrap">
                                <!-- Tabs -->
                                <ul id="myTab" class="nav nav-tabs">
                                    <li class="active"><a href="#monday" data-toggle="tab">Monday</a></li>
                                    <li><a href="#tuesday" data-toggle="tab">Tuesday</a></li>
                                    <li><a href="#wednesday" data-toggle="tab">Wednesday</a></li>
                                    <li><a href="#monday" data-toggle="tab">Thursday</a></li>
                                    <li><a href="#tuesday" data-toggle="tab">Friday</a></li>
                                    <li><a href="#wednesday" data-toggle="tab">Saturday</a></li>
                                    <li><a href="#monday" data-toggle="tab">Sunday</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content class-schedule-tab">
                                    <div class="tab-pane fade in active" id="monday">
                                        <ul class="odd">
                                            <li>Yoga</li>
                                            <li>10.00 am - 12.00 pm</li>
                                            <li>Robert Smith</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                        <ul class="even">
                                            <li>Running</li>
                                            <li>09.00 am - 12.00 pm</li>
                                            <li>Petter john</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                        <ul class="odd">
                                            <li>Gym</li>
                                            <li>10.00 am - 12.00 pm</li>
                                            <li>Kazi Fahim</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                        <ul class="even">
                                            <li>Free Hand</li>
                                            <li>09.00 am - 12.00 pm</li>
                                            <li>Jessy Reo</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                        <ul class="odd">
                                            <li>Weight Lifting</li>
                                            <li>10.00 am - 12.00 pm</li>
                                            <li>Zara Keron</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                        <ul class="even">
                                            <li>Ftiness</li>
                                            <li>09.00 am - 12.00 pm</li>
                                            <li>Jack Sparrow</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="tuesday">
                                        <ul class="odd">
                                            <li>Yoga</li>
                                            <li>10.00 am - 12.00 pm</li>
                                            <li>Robert Smith</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                        <ul class="even">
                                            <li>Running</li>
                                            <li>09.00 am - 12.00 pm</li>
                                            <li>Petter john</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                        <ul class="odd">
                                            <li>Gym</li>
                                            <li>10.00 am - 12.00 pm</li>
                                            <li>Kazi Fahim</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                        <ul class="even">
                                            <li>Free Hand</li>
                                            <li>09.00 am - 12.00 pm</li>
                                            <li>Jessy Reo</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                        <ul class="odd">
                                            <li>Weight Lifting</li>
                                            <li>10.00 am - 12.00 pm</li>
                                            <li>Zara Keron</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="wednesday">
                                        <ul class="odd">
                                            <li>Yoga</li>
                                            <li>10.00 am - 12.00 pm</li>
                                            <li>Robert Smith</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                        <ul class="even">
                                            <li>Running</li>
                                            <li>09.00 am - 12.00 pm</li>
                                            <li>Petter john</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                        <ul class="odd">
                                            <li>Gym</li>
                                            <li>10.00 am - 12.00 pm</li>
                                            <li>Kazi Fahim</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                        <ul class="even">
                                            <li>Free Hand</li>
                                            <li>09.00 am - 12.00 pm</li>
                                            <li>Jessy Reo</li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End class schedule area -->
            <!-- Start Fitness class summer area -->
            <div class="fitness-summer-area padding-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="fitness-summer">
                                <div class="fitness-content">
                                    <h3>Fitness Classes This Summer.</h3>
                                    <p>Pay Now and<br> Get <span>35%</span> Discount</p>
                                    <a class="custom-button" data-title="Become A Member" href="#">Become A Member</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Fitness class summer area -->
            <!-- Start logo showcase area -->
            <div class="logo-showcase-area nav-on-focus">
                <div class="container">
                    <div class="gym-carousel nav-control-middle-opacity"
                        data-loop="true"
                        data-items="6"
                        data-margin="30"
                        data-autoplay="false"
                        data-autoplay-timeout="10000"
                        data-smart-speed="2000"
                        data-dots="false"
                        data-nav="true"
                        data-nav-speed="false"
                        data-r-x-small="2"
                        data-r-x-small-nav="true"
                        data-r-x-small-dots="false"
                        data-r-x-medium="3"
                        data-r-x-medium-nav="true"
                        data-r-x-medium-dots="false"
                        data-r-small="4"
                        data-r-small-nav="true"
                        data-r-small-dots="false"
                        data-r-medium="5"
                        data-r-medium-nav="true"
                        data-r-medium-dots="false"
                        data-r-large="6"
                        data-r-large-nav="true"
                        data-r-large-dots="false">
                        <div class="single-logo-area">
                            <div class="single-logo">
                                <a href="#"><img src="img/client/1.jpg" alt="client1"></a>
                            </div>
                        </div>
                        <div class="single-logo-area">
                            <div class="single-logo">
                                <a href="#"><img src="img/client/2.jpg" alt="client2"></a>
                            </div>
                        </div>
                        <div class="single-logo-area">
                            <div class="single-logo">
                                <a href="#"><img src="img/client/3.jpg" alt="client3"></a>
                            </div>
                        </div>
                        <div class="single-logo-area">
                            <div class="single-logo">
                                <a href="#"><img src="img/client/4.jpg" alt="client4"></a>
                            </div>
                        </div>
                        <div class="single-logo-area">
                            <div class="single-logo">
                                <a href="#"><img src="img/client/5.jpg" alt="client5"></a>
                            </div>
                        </div>
                        <div class="single-logo-area">
                            <div class="single-logo">
                                <a href="#"><img src="img/client/6.jpg" alt="client6"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End logo showcase area -->
@endsection
