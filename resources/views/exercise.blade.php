@extends('layouts.app')
@section('title')
<title>GymStar| Class</title>
@endsection
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inner Banner area -->
            <div class="online-store-grid padding-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="online-grid-item">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="gried-view">
                                        <!-- Start online grid view -->
                                        <div class="category-product-grid" id="table_data">
                                            <!-- Start Single product -->
                                            @include('exercises.exercise_data')
                                            <!-- End Single product -->
                                        <!-- End online grid view -->
                                    </div>
                                </div>
                            </div>
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
                                <div class="single-sidebar">
                                    <h3>Best Seller</h3>
                                    <div class="best-seller">
                                        <div class="single-best-seller">
                                            <div class="seller-left pull-left">
                                                <a href="#"><img src="img/product/product1.png" alt=""></a>
                                            </div>
                                            <div class="seller-right media-body">
                                                <div class="seller-content">
                                                    <div class="seller-title"><a href="single-product.html">Product title Here</a></div>
                                                    <div class="review">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li class="inactive"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <ul>
                                                            <li class="discount">$80</li>
                                                            <li class="final">$90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-best-seller">
                                            <div class="seller-left pull-left">
                                                <a href="#"><img src="img/product/product2.png" alt=""></a>
                                            </div>
                                            <div class="seller-right media-body">
                                                <div class="seller-content">
                                                    <div class="seller-title"><a href="single-product.html">Product title Here</a></div>
                                                    <div class="review">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li class="inactive"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <ul>
                                                            <li class="discount">$80</li>
                                                            <li class="final">$90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-best-seller last-item">
                                            <div class="seller-left pull-left">
                                                <a href="#"><img src="img/product/product3.png" alt=""></a>
                                            </div>
                                            <div class="seller-right media-body">
                                                <div class="seller-content">
                                                    <div class="seller-title"><a href="single-product.html">Product title Here</a></div>
                                                    <div class="review">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li class="inactive"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-price">
                                                        <ul>
                                                            <li class="discount">$80</li>
                                                            <li class="final">$90</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-sidebar sidebar-last">
                                    <div class="join-us">
                                        <img src="img/join-us.jpg" alt="">
                                        <div class="join-content">
                                            <div class="percent"><span>25%</span> off</div>
                                            <p>Dsed do eiusmod tempor incididunt.</p>
                                            <a class="custom-button" href="#" data-title="Join Us Now!">Join Us Now!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Online Store area -->
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