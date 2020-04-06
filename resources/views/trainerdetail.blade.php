@extends('layouts.app')
@section('title')
<title>GymStar| Trainer Detail</title>
@endsection
@section('content')
            <!-- Start Inner Banner area -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="innter-title">
                            <h2>Trainer Details</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Trainer Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inner Banner area -->
            <!-- Start Trainer details area -->
            <div class="trainer-details-area padding-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="trainer-detail-image">
                                <div class="detail-image">
                                    <img src="img/trainers/trainer-details.png" alt="">
                                </div>
                                <div class="trainer-info">
                                    <p><span>Experience:</span>3 Years</p>
                                    <p><span>E-mail:</span>Crayy James@gmail.com</p>
                                    <p><span>Phone:</span>+ 000 00000 0000</p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="trainer-detail-content">
                                <div class="detail-heading">
                                    <h2>Kazi Fahim</h2>
                                    <p><span class="degination">Fitness Trainer</span></p>
                                    <p><span class="title">Biography:</span></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sodales ante quis justo egestas euismod. Aenean feugiat nisi commodo quam ornare dictum. Nullam a nunc non mi commodo finibus. Cras fermentum dictum turpis ac scelerisque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                <div class="skill-content-3">
                                    <h3>Skills:</h3>
                                    <div class="skill">
                                        <!-- PROGRESS START -->
                                        <div class="progress">
                                          <div class="lead">Yoga</div>
                                          <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span></div>
                                        </div>
                                        <!-- PROGRESS END -->
                                        <!-- PROGRESS START -->
                                        <div class="progress">
                                          <div class="lead">Boxing</div>
                                          <div class="progress-bar wow fadeInLeft" data-progress="85%" style="width: 85%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>85%</span> </div>
                                        </div>
                                        <!-- PROGRESS END -->
                                        <!-- PROGRESS START -->
                                        <div class="progress">
                                          <div class="lead">GYM</div>
                                          <div class="progress-bar wow fadeInLeft" data-progress="80%" style="width: 80%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>80%</span> </div>
                                        </div>
                                        <!-- PROGRESS END -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Trainer details area -->
            <!-- Start Expert trainers area -->
            <div class="expert-trainer-area nav-on-hover padding-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="section-title">
                                <h2>Expert Trainers</h2>
                            </div>
                            <div class="gym-carousel nav-control-top"
                                data-loop="true"
                                data-items="3"
                                data-margin="30"
                                data-autoplay="false"
                                data-autoplay-timeout="10000"
                                data-smart-speed="2000"
                                data-dots="false"
                                data-nav="true"
                                data-nav-speed="false"
                                data-r-x-small="1"
                                data-r-x-small-nav="true"
                                data-r-x-small-dots="false"
                                data-r-x-medium="2"
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
                                <div class="single-trainer-item">
                                    <div class="trainer-item">
                                        <div class="trainer-img">
                                            <img src="img/trainers/trainer2.jpg" alt="">
                                            <div class="trainer-overly">
                                                <h3><a href="single-trainer.html">David Fahim</a></h3>
                                                <span class="builder">Body Builder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-trainer-item">
                                    <div class="trainer-item">
                                        <div class="trainer-img">
                                            <img src="img/trainers/trainer3.jpg" alt="">
                                            <div class="trainer-overly">
                                                <h3><a href="single-trainer.html">Jecy Deoko</a></h3>
                                                <span class="builder">Running Specialist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-trainer-item">
                                    <div class="trainer-item">
                                        <div class="trainer-img">
                                            <img src="img/trainers/trainer4.jpg" alt="">
                                            <div class="trainer-overly">
                                                <h3><a href="single-trainer.html">John Smith</a></h3>
                                                <span class="builder">Weight Lifting</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-trainer-item">
                                    <div class="trainer-item">
                                        <div class="trainer-img">
                                            <img src="img/trainers/trainer1.jpg" alt="">
                                            <div class="trainer-overly">
                                                <h3><a href="single-trainer.html">David Fahim</a></h3>
                                                <span class="builder">Body Builder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Expert tainers area -->
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
