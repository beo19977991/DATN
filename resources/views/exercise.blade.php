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
                                <a href="#" data-filter="*" class="current">All</a>
                                @foreach($typeExercise as $type)
                                    <a href="" >{{$type->typeExerciseName}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row portfolioContainer gallery-wrapper zoom-gallery" id="table_data">
                        @include('exercises.exercise_data')
                    </div>
                </div>              
            </div>
            <!-- Gallery Area End Here -->  

@endsection
@section('ajax')
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $(document).on('click', '.pagination a', function(event) {
            var page = $(this).attr('href').split('page=')[1];
            console.log(page);
            event.preventDefault();
            fetch_data(page);
        });
        function fetch_data(page){
            $.ajax({
                url:"/page/exercise/pagination/fetch_data?page="+page,
                success:function(data)
                {
                    $('#table_data').html(data);
                }
            });
        }
    });
</script>
@endsection