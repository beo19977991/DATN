@extends('layouts.app', ['title' => 'Schedule'])
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
                                @if($user_login->role==2)
                                    <li><a href="schedule/create_schedule">Create Schedule</a></li>
                                @endif
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
                                    @foreach($schedule as $index => $s)
                                    <li @if($index =='0') class="active"@endif><a href="" data-toggle="tab" onclick= "openTab('{{$index}}')">{{$s->typeSchedule->typeOfScheduleName}}</a></li>
                                    @endforeach
                                    </ul>
                                <div id="myTabContent" class="tab-content class-schedule-tab">
                                @foreach($schedule as $i => $s)
                                    <div class="tab-pane fade in active" id="{{$i}}" @if($i!='0') style="display:none" @endif>
                                        @foreach($data as $item=>$index)
                                        <ul class="odd">
                                            <li>{{$index}}</li>
                                            <li>
                                                @foreach($s->body[$item] as $sch)
                                                    {{$sch}}
                                                @endforeach
                                            </li>
                                            <li>
                                                <a href="page/profile/{{$s->user->id}}">{{$s->user->username}}</a>
                                            </li>
                                            <li><a href="#">Join Now!</a></li>
                                        </ul>
                                        @endforeach
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id='calendar-container'>
    <div id='calendar'></div>
  </div>
<script>
    function openTab(id) {
    var i;
    var x = document.getElementsByClassName("tab-pane");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    document.getElementById(id).style.display = "block";  
    }
</script>
</br></br>
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