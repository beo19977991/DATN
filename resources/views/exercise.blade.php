@extends('layouts.app', ['title' => 'Schedule'])
@section('content')
            <!-- Start Inner Banner area -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="innter-title">
                            <h2>Online Store</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Exercise</li>
                                @if($user_login->role==2)
                                <li><a href="page/create_exercise">Create Exercise</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inner Banner area -->
            <div class="gallery-area padding-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="isotop-classes-tab isotop-btn"> 
                                <a href="#" data-filter="*" data-id="1" class="link current">All</a>
                                @foreach($typeExercise as $type)
                                    <a href="" class="link" title="{{$type->id}}">{{$type->typeExerciseName}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="portfolioContainer zoom-gallery">
                    @foreach($exercise as $ex)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 yaga meditation item-{{$ex->idExerciseType }}">
                            <div class="">
                                <video class="img-responsive" controls>
                                    <source src="upload/exercise/video/{{$ex->video}}">
                                </video>
                                <div class="classes-title">
                                    <h3>Muscle:<a href="#">{{" ".$ex->typeExercise->typeExerciseName}}</a></h3>
                                    <h3>Trainer:<a href="">{{" ".$ex->user->username}}</a></h3>
                                    <h3><a href="video/{{$ex->id}}">{{$ex->title}}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>              
            </div>
            <!-- Gallery Area End Here -->  

@endsection
@section('ajax')
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<script>
        $('.link').click(function(e) {
        if ($(this).attr("data-id")) {
            $(".meditation").show();
            return;
        }
        $('.meditation').hide();
        $('.item-' + $(this).attr('title')).show();
        e.preventDefault();
    });
</script>
@endsection