@extends('layouts.app', ['title' => 'Class'])
@section('content')
            <!-- Start Inner Banner area -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="innter-title">
                            <h2>Our Classes</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Classes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inner Banner area -->
            <!-- Start Classes page area -->
            <div class="our-classes-area padding-top">
                <div class="container">
                    <div class="row">
                        <!-- Gallery Section Area Start Here -->
                            <div class="gallery-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="isotop-classes-tab">
                                                <a href="#" data-filter="*" class="current">All</a>
                                                <a href="#" data-filter=".building">Body Building</a>
                                                <a href="#" data-filter=".yaga">Yoga</a>
                                                <a href="#" data-filter=".karate">Karate</a>
                                                <a href="#" data-filter=".meditation">Meditation</a>
                                                <a href="#" data-filter=".running">Running</a>
                                                <a href="#" data-filter=".boxing">Boxing</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolioContainer zoom-gallery">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 yaga meditation">
                                        <div class="single-classes-area">
                                            <div class="classes-img">
                                                <a href="#">
                                                    <img src="img/classes/yoga.jpg" alt="yoga">
                                                </a>
                                                <div class="classes-overlay">
                                                    <a class="elv-zoom" href="img/classes/yoga.jpg" title="Classic Yoga"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="classes-title">
                                                <h3><a href="single-classes.html">Classic Yoga</a></h3>
                                                <p class="date">09.00 am - 10.00 Am</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 building karate">
                                        <div class="single-classes-area">
                                            <div class="classes-img">
                                                <a href="#">
                                                    <img src="img/classes/building.jpg" alt="yoga">
                                                </a>
                                                <div class="classes-overlay">
                                                    <a class="elv-zoom" href="img/classes/yoga.jpg" title="building"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="classes-title">
                                                <h3><a href="#">Classic Yoga</a></h3>
                                                <p class="date">10.00 am - 11.00 Am</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 yaga running boxing">
                                        <div class="single-classes-area">
                                            <div class="classes-img">
                                                <a href="#">
                                                    <img src="img/classes/running.jpg" alt="running">
                                                </a>
                                                <div class="classes-overlay">
                                                    <a class="elv-zoom" href="img/classes/running.jpg" title="Running"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="classes-title">
                                                <h3><a href="#">Running</a></h3>
                                                <p class="date">04.00 pm - 10.00 pm</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 building karate">
                                        <div class="single-classes-area">
                                            <div class="classes-img">
                                                <a href="#">
                                                    <img src="img/classes/karate.jpg" alt="karate">
                                                </a>
                                                <div class="classes-overlay">
                                                    <a class="elv-zoom" href="img/classes/karate.jpg" title="Karate"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="classes-title">
                                                <h3><a href="#">Karate</a></h3>
                                                <p class="date">06.00 am - 08.00 Am</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 yaga building boxing">
                                        <div class="single-classes-area">
                                            <div class="classes-img">
                                                <a href="#">
                                                    <img src="img/classes/yoga.jpg" alt="yoga">
                                                </a>
                                                <div class="classes-overlay">
                                                    <a class="elv-zoom" href="img/classes/yoga.jpg" title="Classic Yoga"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="classes-title">
                                                <h3><a href="#">Classic Yoga</a></h3>
                                                <p class="date">09.00 am - 10.00 Am</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 building meditation">
                                        <div class="single-classes-area">
                                            <div class="classes-img">
                                                <a href="#">
                                                    <img src="img/classes/meditation.jpg" alt="meditation">
                                                </a>
                                                <div class="classes-overlay">
                                                    <a class="elv-zoom" href="img/classes/meditation.jpg" title="Meditation"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="classes-title">
                                                <h3><a href="#">Meditation</a></h3>
                                                <p class="date">09.00 am - 10.00 Am</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 karate running">
                                        <div class="single-classes-area">
                                            <div class="classes-img">
                                                <a href="#">
                                                    <img src="img/classes/yoga.jpg" alt="yoga">
                                                </a>
                                                <div class="classes-overlay">
                                                    <a class="elv-zoom" href="img/classes/yoga.jpg" title="Classic Yoga"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="classes-title">
                                                <h3><a href="#">Classic Yoga</a></h3>
                                                <p class="date">09.00 am - 10.00 Am</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 meditation boxing">
                                        <div class="single-classes-area">
                                            <div class="classes-img">
                                                <a href="#">
                                                    <img src="img/classes/building.jpg" alt="building">
                                                </a>
                                                <div class="classes-overlay">
                                                    <a class="elv-zoom" href="img/classes/building.jpg" title="Body Building"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="classes-title">
                                                <h3><a href="#">Body Building</a></h3>
                                                <p class="date">10.00 am - 11.00 Am</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 running boxing">
                                        <div class="single-classes-area">
                                            <div class="classes-img">
                                                <a href="#">
                                                    <img src="img/classes/running.jpg" alt="running">
                                                </a>
                                                <div class="classes-overlay">
                                                    <a class="elv-zoom" href="img/classes/running.jpg" title="Running"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="classes-title">
                                                <h3><a href="#">Running</a></h3>
                                                <p class="date">04.00 pm - 10.00 pm</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Gallery Section Area End Here -->
                    </div>
                </div>
            </div>
            <!-- End Classes page area -->
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
