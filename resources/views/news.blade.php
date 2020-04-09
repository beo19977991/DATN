@extends('layouts.app')
@section('title')
<title>GymStar| News</title>
@endsection
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
                            <section class="articles">
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
                                    <h3>Categories</h3>
                                    <div class="categories">
                                        <ul>
                                            <li><a href="news.html">Fitness Classes</a></li>
                                            <li><a href="news.html">Body Building</a></li>
                                            <li><a href="news.html">Trainer</a></li>
                                            <li><a href="news.html">Running</a></li>
                                            <li><a href="news.html">Yoga</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-sidebar sidebar-last">
                                    <h3>Archives</h3>
                                    <div class="archives-list">
                                        <table style="width:100%; border:0;">
                                            <tbody>
                                                <tr>
                                                    <td>February</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>January</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>March</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>November</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                                <tr>
                                                    <td>December</td>
                                                    <td>2016<span>(3)</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start latest news area -->
@endsection
@section('ajax')
<script src="{{ asset('js/vendor/jquery-1.11.3.min.js') }}"></script>
<script type="text/javascript">

    $(document).ready(function()
    {
        $('.tag_container').on('click', '.pagination a', function(e) {
                e.preventDefault();
                var url = $('#read-more').attr('href');
                getArticles(url);
                window.history.pushState("", "", url);
            });

            function getArticles(url) {
                $.ajax({
                    url : url
                }).done(function (data) {
                    $('.articles').html(data);
                }).fail(function () {
                    alert('Articles could not be loaded.');
                });
            }
    });
</script>
@endsection
