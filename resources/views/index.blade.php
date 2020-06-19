@extends('layouts.app', ['title' => 'Home'])
@section('content')
        <!-- Start slider area  -->
        <div class="slider-area slider-top-space-header1 slider1-caption">
            <div class="bend niceties preview-2">
                <div id="ensign-nivoslider" class="slides">
                    <img src="img/slides/slide1.jpg" alt="image" title="#slider-direction-1" />
                    <img src="img/slides/slide2.jpg" alt="image" title="#slider-direction-1" />
                    <img src="img/slides/slide1.jpg" alt="image" title="#slider-direction-1" />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <!-- <div class="slider-progress"></div> -->
                    <div class="slider-content t-cn s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <div data-wow-delay="0.1s" data-wow-duration="1s" class="tp-caption big-title rs-title customin customout bg-sld-cp-primary ">Build <span>Your</span> Body <span>Strong</span>
                            </div>
                            <div data-wow-delay="0.2s" data-wow-duration="2s" class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 ">
                            Never give up on a dream just because of the time it will take to accomplish it. The time will pass anyway 
                            </div>
                            <div class="button">
                                <a href="#" class="btn custom-button" data-title="Join With Us">Join With Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End slider area -->
        <!-- Start About fitness area -->
        <div class="about-fitness-area">
            <div class="container-fluid">
                <div class="about-fitness-left">
                    <div class="about-left-img padding-space">
                        <img src="img/about-fitness-img.png" alt="about-fitness-img">
                        <div class="overly">
                            <h3>All <span>About</span><br>GymStar</h3>
                        </div>
                    </div>
                </div>

                <div class="about-fitness-right padding-space">
                <!-- type of schedule start -->
                @foreach($typeSchedule as $type)
                    <div class="about-single-service">
                        <div class="media service-item">
                            <div class="pull-left service-image">
                                <a href="#">
                                    <span class="flaticon-olympic-weightlifting"></span>
                                </a>
                            </div>
                            <div class="media-body service-content">
                                <h3 class="media-heading"><a href="#">{{$type->typeOfScheduleName}}</a></h3>
                                <p>I don’t stop when i ‘m tired, I stop when i done</p>
                                <p>Train like an athlete, eat like a nutritionist, sleep like a baby, win like a champion</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- end type of schedule -->
            </div>
        </div>
        <!-- End About fitness area -->
        <!-- Start feature classes area -->
        <div class="feature-classes-area nav-on-hover">
            <div class="container">
                <div class="section-title">
                    <h2>NEW EXERCISE</h2>
                </div>
            </div>
            <div class="container">
                <div class="gym-carousel nav-control-top" data-loop="true" data-items="3" data-margin="15" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
                @foreach($exercise as $ex)
                <div class="single-product-classes">
                        <div class="single-product">
                            <video class="img-responsive" controls>
                                <source src="upload/exercise/video/{{$ex->video}}">
                            </video>
                        </div>
                        <div class="product-content">
                            <h3><a href="#">{{$ex->typeExercise->typeExerciseName}}</a></h3>
                            <h3>Trainer:<a href="page/profile/{{$ex->user->id}}">{{" ".$ex->user->username}}</a> </h3>
                            <h3><a href="video/{{$ex->id}}">{{$ex->title}}</a></h3>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        <!-- End feature product area -->
        <!-- Start being body builder area -->
        <div class="being-body-builder  bg-secondary padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="being-left-img">
                            <img src="img/being-builder.png" alt="being-builder">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="being-right-content">
                            <div class="being-content">
                                <h2>Being <span>Body</span></h2>
                                <p>Builders</p>
                                <a class="btn sign-button" href="user/login">Sign in!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End being body builder area -->
        <!-- Start class schedule area -->
        <div class="class-schedule">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="section-title">
                            <h2>Class ScheDule</h2>
                        </div>
                        <div class="class-schedule-wrap">
                            <!-- Tabs -->
                            <ul id="myTab" class="nav nav-tabs">
                                <li class="active"><a href="#monday" data-toggle="tab">Monday</a></li>
                                <li><a href="#tuesday" data-toggle="tab">Tuesday</a></li>
                                <li><a href="#wednesday" data-toggle="tab">Wednesday</a></li>
                                <li><a href="#thursday" data-toggle="tab">Thursday</a></li>
                                <li><a href="#friday" data-toggle="tab">Friday</a></li>
                                <li><a href="#saturday" data-toggle="tab">Saturday</a></li>
                                <li><a href="#sunday" data-toggle="tab">Sunday</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content class-schedule-tab">
                            @foreach($data as $key => $value)
                                <div id="{{$value}}"
                                @if($value === "monday")
                                    class="tab-pane fade in active"
                                @else
                                    class="tab-pane fade"
                                @endif
                                >
                                @foreach($schedule as $s)
                                    @foreach($s->body[$key] as $k =>$v)
                                    <ul
                                    @if(($k%2)===0)
                                            class="odd"
                                        @else
                                            class="even"
                                        @endif    
                                    >
                                            <li>{{$v}}</li>
                                            <li>{{$s->typeSchedule->typeOfScheduleName}}</li>
                                            <li>{{$s->user->username}}</li>
                                            <li><a href="#">Join Now!</a></li>
                                    </ul>
                                    @endforeach
                                @endforeach
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End class schedule area -->
        <!-- Start Related Classes area  -->
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
                                    @foreach($related_classes as $rel_classes)
                                    <div class="single-related-classes">
                                        <div class="classes-img">
                                            <a href="#">
                                                <img src="upload/course/photo/{{$rel_classes->photo}}" alt="">
                                            </a>
                                            <div class="classes-overlay">
                                                <a class="elv-zoom" href="upload/course/photo/{{$rel_classes->photo}}" title="Classic Yoga"><i class="fa fa-search" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="classes-title">
                                            <h3><a href="#">{{$rel_classes->course_name}}</a></h3>
                                            <p class="date"><span>Start: </span>{{ \Carbon\Carbon::parse($rel_classes->start_time)->format('d/m/Y')}}</p>
                                            <p class ="date"><span>End: </span>{{ \Carbon\Carbon::parse($rel_classes->end_time)->format('d/m/Y')}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
        <!-- End Related Classes area -->
        <!-- Start Expert trainers area -->
        <div class="expert-trainer-area nav-on-hover">
            <div class="container">
                <div class="section-title">
                    <h2>Expert Trainers</h2>
                </div>
            </div>
            <div class="container">
                <div class="gym-carousel nav-control-top" data-loop="true" data-items="3" data-margin="15" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
                    @foreach($trainer as $trainer)
                    <div class="owl-item active" style="width:352.5px; margin-right:15px">
                        <div class="single-trainer-item">
                            <div class="trainer-item">
                                <div class="trainer-img">
                                    <img style="width:352.5px;height:450.41px" src="upload/user/photo/{{$trainer->photo}}" alt="#">
                                    <div class="social-overly">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="trainer-overly">
                                        <h3><a href="#">{{$trainer->username}}</a></h3>
                                        <span class="builder">Body Builder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Expert tainers area -->
        <!-- Start Price Table area -->
        <div class="price-table-area">
            <div class="container">
                <div class="section-title">
                    <h2>Our Course</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($course as $course)
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hvr-float-shadow">
                            <div class="price-table-box ">
                                <span>{{$course->course_name}}</span>
                                <h3> <span> Price: </span> &nbsp; {{$course->price . " vnd"}}</h3>
                                <h3> <span> Discount: </span> &nbsp; {{$course->discount * 100 ." %"}}</h3>
                                <h3> <span> Pay: </span>  {{ $course->price - ($course->price * $course->discount) ." vnd" }}</h3>
                                <a class="custom-button" data-title="Become A Member" href="#">Details</a>
                            </div>
                        </div>   
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Price Table area -->
        <!-- Gallery Area Start Here -->
        <div class="gallery-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="section-title">
                            <h2>Our Gallery</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="isotop-classes-tab isotop-btn">
                            <a href="#" data-filter="*" class="current">All</a>
                            <a href="#" data-filter=".Yoga">Yoga</a>
                            <a href="#" data-filter=".Running">Running</a>
                            <a href="#" data-filter=".Gym">Gym</a>
                            <a href="#" data-filter=".Fitness">Fitness</a>
                        </div>
                    </div>
                </div>
                <div class="row portfolioContainer gallery-wrapper zoom-gallery">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Yoga Gym">
                        <div class="gallery-box">
                            <img src="img/gallery/1.jpg" class="img-responsive" alt="gallery">
                            <div class="gallery-content">
                                <a href="img/gallery/1.jpg" class="elv-zoom" title="Fitness"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Running Gym Fitness">
                        <div class="gallery-box">
                            <img src="img/gallery/2.jpg" class="img-responsive" alt="gallery">
                            <div class="gallery-content">
                                <a href="img/gallery/2.jpg" class="elv-zoom" title="Push Up"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Yoga Running Fitness">
                        <div class="gallery-box">
                            <img src="img/gallery/3.jpg" class="img-responsive" alt="gallery">
                            <div class="gallery-content">
                                <a href="img/gallery/3.jpg" class="elv-zoom" title="Weight Lifting"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Yoga Gym">
                        <div class="gallery-box">
                            <img src="img/gallery/4.jpg" class="img-responsive" alt="gallery">
                            <div class="gallery-content">
                                <a href="img/gallery/4.jpg" class="elv-zoom" title="Free Hand"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 room Gym Fitness">
                        <div class="gallery-box">
                            <img src="img/gallery/5.jpg" class="img-responsive" alt="gallery">
                            <div class="gallery-content">
                                <a href="img/gallery/5.jpg" class="elv-zoom" title="Body Building"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Yoga campus">
                        <div class="gallery-box">
                            <img src="img/gallery/6.jpg" class="img-responsive" alt="gallery">
                            <div class="gallery-content">
                                <a href="img/gallery/6.jpg" class="elv-zoom" title="Gym"><i class="fa fa-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End Here -->
        <!-- Start Fitness class summer area -->
        <div class="fitness-summer-area padding-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="fitness-summer">
                            <div class="fitness-content">
                                <h3><span>Fitness Classes</span> This Summer.</h3>
                                <p>Pay Now and
                                    <br> Get <span>35%</span> Discount</p>
                                <a class="custom-button" target="_blank" data-title="Become A Member" href="{{ route('course') }}">Become A Member</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Fitness class summer area -->
        <!-- Start online store area -->
        <div class="online-store-area nav-on-hover">
            <div class="container">
                <div class="section-title">
                    <h2>Store</h2>
                </div>
            </div>
            <div class="container">
                <div class="gym-carousel nav-control-top nav-on-hover" data-loop="true" data-items="4" data-margin="15" 
                data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" 
                data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" 
                data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" 
                data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" d
                ata-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" 
                data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" 
                data-r-large-dots="false">
                    @foreach($product as $product)
                    <div class="single-product-store">
                        <div class="single-product">
                            <a href="#"><img src="upload/product/{{$product->photo}}" alt="#"></a>
                            <div class="overlay"></div>
                            <div class="product-info">
                                <ul>
                                    <li><a href="#" title="Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                    <li><a href="#" title="Whishlist"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" title="Campare"><i class="fa fa-compress"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="#">{{$product->productName}}</a></h3>
                            <h4><span>{{$product->typeProduct->typeProductName}}</span></h4>
                            <span class="regular-price">
                                    <span class="product-price">{{$product->price}}.000 vnd</span>
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End online store area -->
        <!-- Counter Area Start Here -->
        <div class="counter-area" style="background-image: url('img/banner/counter-back.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 counter1-box wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".20s">
                        <h2 class="counter">{{$count_customer}}</h2>
                        <p>Satisfied Customers</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 counter1-box wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".40s">
                        <h2 class="counter">{{$count_trainer}}</h2>
                        <p>Trainers</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 counter1-box wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".60s">
                        <h2 class="counter">{{$count_exercise}}</h2>
                        <p>Exercise</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 counter1-box wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".80s">
                        <h2 class="counter">{{$count_class}}</h2>
                        <p>Classes</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter Area End Here -->
        <!-- Start latest news area -->
        <div class="latest-news-area nav-on-hover">
            <div class="container">
                <div class="section-title">
                    <h2>Latest News</h2>
                </div>
            </div>
            <div class="container">
                <div class="gym-carousel nav-control-top" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="1" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
                    @foreach($latest_news as $ln)
                    <div class="single-latest-news">
                        <div class="single-news">
                            <div class="single-image"><img src="upload/post/photo/{{$ln->photo}}" alt="news1"></div>
                            <div class="date">{{$ln->updated_at->format('d')}}
                                <br>{{$ln->updated_at->format('M')}}
                                <br>{{$ln->updated_at->format('Y')}}</div>
                        </div>
                        <div class="news-content">
                            <h3><a href="{{ route('news_detail',['id'=>$ln->id]) }}">{{$ln->title}}</a></h3>
                            <p>{{$ln->preview}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End latest news area -->
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