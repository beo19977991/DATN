@extends('layouts.app', ['title' => 'Course'])
@section('content')
<div class="inner-banner-area">
        <div class="container">
            <div class="row">
                <div class="innter-title">
                    <h2>Classes</h2>
                </div>
                <div class="breadcrum-area">
                    <ul class="breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li class="active">Classes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                            <a href="#" data-filter="*" data-id="1" class="link current">All</a>
                                                @foreach($trainers as $index=>$trainer)
                                                <a href="#" class="link" title="{{$trainer->id}}" data-filter=".yaga">{{$trainer->name}}</a>
                                                @endforeach                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="portfolioContainer zoom-gallery">
                                @foreach($course as $c)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 yaga meditation item-{{$c->trainer_id}}">
                                        <div class="single-classes-area">
                                            <div class="classes-img">
                                                <a href="#">
                                                    <img src="upload/course/photo/{{$c->photo}}" >
                                                </a>
                                                <div class="classes-overlay">
                                                    <a class="elv-zoom" href="upload/course/photo/{{$c->photo}}" title="Classic Yoga"><i class="fa fa-search" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="classes-title">
                                                <h3>Class Name:<a target="_blank" href="page/course/{{$c->id}}">{{$c->course_name}}</a></h3>
                                                <h3>Trainer: <a href="#">{{$c->trainer->username}}</a></h3>
                                                <p class="date">Start:{{ \Carbon\Carbon::parse($c->start_time)->format('d/m/Y')}}</p>
                                                <p class="date">End:{{ \Carbon\Carbon::parse($c->end_time)->format('d/m/Y')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach                                    
                                </div>
                            </div>
                        <!-- Gallery Section Area End Here -->
                    </div>
                </div>
            </div>
            <!-- End Classes page area -->
@endsection
@section('scripts')
<script>
(function() {
    $('.link').click(function(e) {
        if ($(this).attr("data-id")) {
            $(".meditation").show();
            return;
        }
        $('.meditation').hide();
        $('.item-' + $(this).attr('title')).show();
        e.preventDefault();
    });
})();
</script>
@endsection