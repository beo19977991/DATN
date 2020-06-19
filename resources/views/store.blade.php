@extends('layouts.app', ['title' => 'Store'])

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
                                <li class="active">Store</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inner Banner area -->
            <!-- Start Online Store area -->
            <div class="online-store-grid padding-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="online-grid-item">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="gried-view">
                                        <!-- Start online grid view -->
                                        <div class="category-product-grid">
                                            <!-- Start Single product -->
                                            @foreach($products as $product)
                                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                                <div class="online-product">
                                                    <a href="#"><img src="upload/product/{{$product->photo}}" alt="product"></a>
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
                                                    <h3 class="name"><a href="product_detail/{{$product->id}}">{{$product->productName}}</a></h3>
                                                    <div class="review">
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                            <li class="uncolor"><a href="#"><i class="fa fa-star"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <span class="regular-price">
                                                        <span class="product-price">{{$product->price}}</span>
                                                    </span>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- End Single product -->
                                        </div>
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
                                    <h3>Classes</h3>
                                    <div class="categories">
                                        <ul>
                                        @foreach($classes as $c)
                                            <li><a target="_blank" href="{{ route('course_details',['id'=>$c->id]) }}">{{$c->course_name}}</a></li>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-sidebar sidebar-last">
                                    <div class="join-us">
                                        <img src="img/join-us.jpg" alt="">
                                        <div class="join-content">
                                            <div class="percent"><span>{{$best_class->discount * 100 ."%"}}</span> off</div>
                                            <p>{{$best_class->body}}</p>
                                            <a class="custom-button" href="#" data-title="Join Us Now!">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Online Store area -->
@endsection()
