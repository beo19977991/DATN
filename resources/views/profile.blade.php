@extends('layouts.app', ['title' => 'Profile'])
@section('content')
            <!-- Start Inner Banner area -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="innter-title">
                            <h2>Profile</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Profile</li>
                                @if($user->id==$user_login->id)
                                <li><a href="">Edit Profile</a></li>
                                @endif
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
            <!-- Start Trainer details area -->
            <div class="trainer-details-area padding-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="trainer-detail-image">
                                <div class="detail-image">
                                    <img src="upload/user/photo/{{$user->photo}}" alt="">
                                </div>
                                <div class="trainer-info">
                                    <p><span>Date Joined:</span>{{$user->created_at->format('d M Y')}}</p>
                                    <p><span>E-mail:</span>{{$user->email}}</p>
                                    <p><span>Phone:</span>{{$user->phone}}</p>
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
                                    <h2>{{$user->name}}</h2>
                                    <p><span class="degination">
                                        @if($user->role ==0)
                                            {{"Admin"}}
                                            @elseif($user->role ==1)
                                            {{"Customer"}}
                                            @elseif($user->role ==2)
                                            {{"Trainer"}}
                                            @elseif($user->role ==3)
                                            {{"Staff"}}
                                        @endif
                                    </span></p>
                                </div>
                                @if(isset($posts))
                                </br>
                                <div class="skill-content-3">
                                    <h3>Posts:</h3>
                                    <div class="skill">
                                        @foreach($posts as $post)
                                        <div class="single-latest-news display-news">
                                            <div class="single-news-page">
                                                <div class="single-news">
                                                    <div class="single-image"><img style="width:236.25px;height:142.2px" src="upload/post/photo/{{$post->photo}}" alt=""></div>
                                                    <div class="date">{{$post->created_at->format('d')}}
                                                        <br>{{$post->created_at->format('M')}}
                                                        <br>{{$post->created_at->format('Y')}}</div>
                                                </div>
                                                <div class="news-content margin-news">
                                                    <h3><a href="news-detail/{{$post->id}}">{{$post->title}}</a></h3>
                                                    <p>{{$post->preview}}</p>
                                                    @if($user->id==$user_login->id)
                                                    <a href="">edit</a>
                                                    &nbsp;&nbsp;
                                                    <a href="">delete</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
<!-- Start feature classes area -->
                @if($user->role ==2)
                <div class="feature-classes-area nav-on-hover">
                    <div class="container">
                        <div class="section-title">
                            <h2>EXERCISE</h2>
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
                                    <h3>{{$ex->typeExercise->typeExerciseName}}</h3>
                                    <h3>Trainer:<a href="">{{" ".$ex->user->username}}</a> </h4>
                                    <h3><a href="video/{{$ex->id}}">{{$ex->title}}</a></h4>
                                    @if($user->id==$user_login->id)
                                    <a href="page/edit_exercise/{{$ex->id}}">edit</a>
                                    &nbsp;&nbsp;
                                    <a href="page/delete_exercise/{{$ex->id}}">delete</a>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                @endif
<!-- End feature product area -->
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
