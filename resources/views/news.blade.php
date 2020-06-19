@extends('layouts.app', ['title' => 'News'])
@section('content')
            <!-- Start Inner Banner area -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="innter-title">
                            <h2>Latest News</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">News</li>
                                <li><a href="page/create_post">Create Post</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inner Banner area -->
            <!-- Start latest news area -->
            <div class="news-page-area padding-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9" id="tag_container">
                            <section class="articles" id="table_data">
                                @include('news.data')
                            </section>
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
                                    <h3>Classes</h3>
                                    <div class="categories">
                                        <ul>
                                        @foreach($classes as $cl)
                                            <li><a href="page/course/{{$cl->id}}">{{$cl->course_name}}</a></li>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start latest news area -->
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<script >
    $(document).ready(function(){
        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page =$(this).attr('href').split('page=')[1];
            fetch_data(page);
        });
        function fetch_data(page) {
            $.ajax({
                url:"/news/fetch_data?page="+page,
                success:function(data)
                {
                    $('#table_data').html(data);
                }
            });
        }
    });
</script>
@endsection
