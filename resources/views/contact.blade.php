@extends('layouts.app')
@section('title')
<title>GymStar| Contact</title>
@endsection
@section('content')
        <!-- Start Inner Banner area -->
        <div class="inner-banner-area">
            <div class="container">
                <div class="row">
                    <div class="innter-title">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="breadcrum-area">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Inner Banner area -->
        <!-- Start Contact page area -->
        <div class="contact-us-area padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <form class="form-horizontal contact-form" id="contact-form" role="form">
                            <fieldset>
                                <!-- Form Name -->
                                <legend>Contact Form</legend>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label pull-left" for="textinput1"><i class="fa fa-user" aria-hidden="true"></i></label>
                                    <div class="media-body">
                                        <input id="form-name" name="textinput" placeholder="Name" class="form-control input-md" type="text" data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label pull-left" for="textinput2"><i class="fa fa-envelope-o" aria-hidden="true"></i></label>
                                    <div class="media-body">
                                        <input id="form-email" name="textinput" placeholder="E-mail" class="form-control input-md" type="text" data-error="E-mail field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label pull-left" for="textinput3"><i class="fa fa-phone" aria-hidden="true"></i></label>
                                    <div class="media-body">
                                        <input id="form-phone" name="textinput" placeholder="Phone" class="form-control input-md" type="text" data-error="Phone field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="control-label arealebel pull-left" for="textarea"><i class="fa fa-envelope" aria-hidden="true"></i></label>
                                    <div class="media-body">
                                        <textarea class="textarea form-control" id="form-message" name="textarea" placeholder="Message" data-error="Message field is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- Button -->
                                <div class="form-group send-button">
                                    <div class="media-body">
                                        <button type="submit" class="btn-read-more-fill btn-send">Send Message</button>
                                    </div>
                                </div>
                                <div class='form-response'></div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact page area -->
        <!-- Start logo showcase area -->
        <div class="logo-showcase-area nav-on-focus">
            <div class="container">
                <div class="gym-carousel nav-control-middle-opacity" data-loop="true" data-items="6" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="2" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="3" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="4" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="5" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="6" data-r-large-nav="true" data-r-large-dots="false">
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
