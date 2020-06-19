@extends('layouts.app', ['title' => 'Product'])
@section('content')
            <!-- Start Inner Banner area -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="innter-title">
                            <h2>Single Product</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Product</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inner Banner area -->
            <!-- Start Single product  area -->
            <div class="single-product-area">
                <div class="container">
                    <div class="row">
                        <!-- Start content part -->
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="product-area">
                                <div class="col-lg-5 col-md-5 col-sm-5 product-image">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active product-picture" id="product-1">
                                            <div class="overlayer"></div>
                                            <a href="single-product.html" class="zoom ex">
                                                <img src="upload/product/{{$product->photo}}" alt="single Product Image">
                                                <div class="overlayer"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 product-content">
                                    <div class="product-detail-area">
                                        <h2>{{$product->productName}}</h2>
                                        <div class="review">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="inactive"><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="regular-price">
                                            <span class="product-price">{{"$". $product->price}}</span>
                                        </div>
                                        <div class="product-category">
                                            <p><span>Preview:</span>{{$product->preview}}</p>
                                        </div>
                                        <div class="product-category">
                                            <p><span>Category:</span> {{$product->typeProduct->typeProductName}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-overview-area col-lg-12 col-md-12 col-sm-12">
                                    <!-- Start Related product area -->
                                    <div class="online-store-area related-product-area nav-on-hover padding-top">
                                        <div class="section-title">
                                            <h2>Related Products</h2>
                                        </div>
                                        <div class="gym-carousel nav-control-top nav-on-hover"
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
                                            @foreach($relalted_product as $rp)
                                            <div class="single-product-store">
                                                <div class="single-product">
                                                    <a href="#"><img src="upload/product/{{$rp->photo}}" alt="product"></a>
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
                                                    <h3 class="name"><a href="#">{{$rp->productName}}</a></h3>
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
                                                        <span class="product-price">{{"$". $rp->price}}</span>
                                                    </span>
                                                </div>
                                            </div>
                                            @endforeach
                                            <div class="single-product-store">
                                                <div class="single-product">
                                                    <a href="#"><img src="img/product/product2.png" alt="product"></a>
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
                                                    <h3 class="name"><a href="#">Product Title Here</a></h3>
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
                                                        <span class="product-price">$59.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="single-product-store">
                                                <div class="single-product">
                                                    <a href="#"><img src="img/product/product3.png" alt="product"></a>
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
                                                    <h3 class="name"><a href="#">Product Title Here</a></h3>
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
                                                        <span class="product-price">$59.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="single-product-store">
                                                <div class="single-product">
                                                    <a href="#"><img src="img/product/product4.png" alt="product"></a>
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
                                                    <h3 class="name"><a href="#">Product Title Here</a></h3>
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
                                                        <span class="product-price">$59.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="single-product-store">
                                                <div class="single-product">
                                                    <a href="#"><img src="img/product/product1.png" alt="product"></a>
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
                                                    <h3 class="name"><a href="#">Product Title Here</a></h3>
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
                                                        <span class="product-price">$59.00</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Related product area -->
                                </div>
                            </div>
                        </div>
                        <!-- End content part -->
                        <!-- Start Sidebar part -->
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
                        <!-- End Sidebar part -->
                    </div>
                </div>
            </div>
            <!-- End Single product area -->
@endsection
