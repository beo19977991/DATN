@extends('layouts.app')
@section('title')
<title>GymStar| Class Detail</title>
@endsection
@section('content')
            <!-- Start Inner Banner area -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="innter-title">
                            <h2>Single Class</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="classes.html">Classes</a></li>
                                <li class="active">Class Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inner Banner area -->
            <!-- Start details classes area -->
            <div class="classes-detail-area padding-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="single-class-detail">
                                <div class="class-content">
                                    <div class="detail-img">
                                        <img src="img/classes/class-detail-img.jpg" alt="detail-img">
                                    </div>
                                    <div class="class-heading">
                                        <h3>Body Building</h3>
                                        <ul>
                                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>Class Time : 10.00 AM - 11.00 AM</li>
                                            <li><i class="fa fa-user" aria-hidden="true"></i>Trainer : <a href="#">John Smith</a></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa cupidatat non proident.</p>
                                    </div>
                                    <div class="choose-body">
                                        <h3>Why You Choose Body Building?</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris.</p>
                                        <ul class="choose-list">
                                            <li>It’s Help your body balance</li>
                                            <li>Daily Work Freshness</li>
                                            <li>Dummy text here</li>
                                            <li>Your Text write her</li>
                                        </ul>
                                        <a href="#" class="custom-button" data-title="Join Class Today">Join Class Today</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Related classes -->
                            <div class="related-classes-area nav-on-hover padding-space">
                                <div class="section-title">
                                    <h2>Related Classes</h2>
                                </div>
                                <div class="gym-carousel nav-control-top zoom-gallery"
                                    data-loop="true"
                                    data-items="3"
                                    data-margin="15"
                                    data-autoplay="false"
                                    data-autoplay-timeout="10000"
                                    data-smart-speed="2000"
                                    data-dots="false"
                                    data-nav="true"
                                    data-nav-speed="false"
                                    data-r-x-small="1"
                                    data-r-x-small-nav="true"
                                    data-r-x-small-dots="false"
                                    data-r-x-medium="1"
                                    data-r-x-medium-nav="true"
                                    data-r-x-medium-dots="false"
                                    data-r-small="2"
                                    data-r-small-nav="true"
                                    data-r-small-dots="false"
                                    data-r-medium="3"
                                    data-r-medium-nav="true"
                                    data-r-medium-dots="false"
                                    data-r-large="3"
                                    data-r-large-nav="true"
                                    data-r-large-dots="false">
                                    <div class="single-related-classes">
                                        <div class="classes-img">
                                            <a href="#">
                                                <img src="img/classes/yoga.jpg" alt="">
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
                                    <div class="single-related-classes">
                                        <div class="classes-img">
                                            <a href="#">
                                                <img src="img/classes/running.jpg" alt="">
                                            </a>
                                            <div class="classes-overlay">
                                                <a class="elv-zoom" href="img/classes/running.jpg" title="Running"><i class="fa fa-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="classes-title">
                                            <h3><a href="single-classes.html">Running</a></h3>
                                            <p class="date">09.00 am - 10.00 Am</p>
                                        </div>
                                    </div>
                                    <div class="single-related-classes">
                                        <div class="classes-img">
                                            <a href="#">
                                                <img src="img/classes/meditation.jpg" alt="">
                                            </a>
                                            <div class="classes-overlay">
                                                <a class="elv-zoom" href="img/classes/meditation.jpg" title="Meditation"><i class="fa fa-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="classes-title">
                                            <h3><a href="single-classes.html">Meditation</a></h3>
                                            <p class="date">09.00 am - 10.00 Am</p>
                                        </div>
                                    </div>
                                    <div class="single-related-classes">
                                        <div class="classes-img">
                                            <a href="#">
                                                <img src="img/classes/karate.jpg" alt="">
                                            </a>
                                            <div class="classes-overlay">
                                                <a class="elv-zoom" href="img/classes/karate.jpg" title="Classic Yoga"><i class="fa fa-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="classes-title">
                                            <h3><a href="single-classes.html">Classic Yoga</a></h3>
                                            <p class="date">09.00 am - 10.00 Am</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Related classes -->
                        </div>
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
                                            <li><a href="classes.html">Fitness Classes</a></li>
                                            <li><a href="classes.html">Body Building</a></li>
                                            <li><a href="classes.html">Trainer</a></li>
                                            <li><a href="classes.html">Running</a></li>
                                            <li><a href="classes.html">Yoga</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-sidebar">
                                    <h3>Happy Client’s</h3>
                                    <div class="happy-clients">
                                        <div class="single-clients">
                                            <p><i class="fa fa-quote-left" aria-hidden="true"></i></p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntua.</p>
                                            <div class="client-heading">
                                                <h4><a href="#">Kazi Fahim</a></h4>
                                                <p>CEO PsdBoss</p>
                                            </div>
                                        </div>
                                        <div class="single-clients">
                                            <p><i class="fa fa-quote-left" aria-hidden="true"></i></p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntua.</p>
                                            <div class="client-heading">
                                                <h4><a href="#">Devid Manik</a></h4>
                                                <p>CEO PsdBoss</p>
                                            </div>
                                        </div>
                                        <div class="single-clients">
                                            <p><i class="fa fa-quote-left" aria-hidden="true"></i></p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididuntua.</p>
                                            <div class="client-heading">
                                                <h4><a href="#">Devid Hogg</a></h4>
                                                <p>CEO PsdBoss</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-sidebar sidebar-last">
                                    <div class="join-us">
                                        <img src="img/join-us.jpg" alt="">
                                        <div class="join-content">
                                            <div class="percent"><span>25%</span> off</div>
                                            <p>Dsed do eiusmod tempor incididunt.</p>
                                            <a class="custom-button" href="#" data-title="Join Us Now!">Join Us Now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End details classes area -->
@endsection
