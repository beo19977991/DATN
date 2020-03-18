@extends('layouts.app')
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
                                                <img src="img/product/product1.png" alt="single Product Image">
                                                <div class="overlayer"></div>
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane product-picture" id="product-2">
                                            <a href="single-product.html" class="zoom ex">
                                                <img src="img/product/product2.png" alt="single Product Image">
                                                <div class="overlayer"></div>
                                            </a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane product-picture" id="product-3">
                                            <a href="single-product.html" class="zoom ex">
                                                <img src="img/product/product3.png" alt="single Product Image">
                                                <div class="overlayer"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Nav tabs -->
                                    <div class="single-product-tab">
                                        <ul class="nav nav-tabs tab-image" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#product-1" role="tab" data-toggle="tab">
                                                    <img src="img/product/product1.png" alt="single Product Image">
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#product-2" role="tab" data-toggle="tab">
                                                    <img src="img/product/product2.png" alt="single Product Image">
                                                </a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#product-3" role="tab" data-toggle="tab">
                                                    <img src="img/product/product3.png" alt="single Product Image">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 product-content">
                                    <div class="product-detail-area">
                                        <h2>Single Product Title</h2>
                                        <div class="review">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                <li class="inactive"><a href="#"><i class="fa fa-star"></i></a></li>
                                            </ul>
                                            <p>(1 customer review)</p>
                                        </div>
                                        <div class="regular-price">
                                            <span class="product-price">$59.00</span>
                                        </div>
                                        <div class="sku">
                                            <span>SKU: 0010</span>
                                        </div>
                                        <div class="detail-short-des">
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinc amet risus consectetur, non consectetur nisl finibus. Ut ac eros quis mi volutpat cursus vel non risus.</p>
                                        </div>
                                        <div class="product-cart-counter">
                                            <ul>
                                                <li>
                                                    <div class="detail-cart">
                                                        <a href="#">Add To Cart</a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="input-group spinner">
                                                    <input type="text" class="form-control" value="1">
                                                        <div class="input-group-btn-vertical">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                                                            <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-category">
                                            <p><span>Category:</span> Other</p>
                                        </div>
                                        <div class="product-tag">
                                            <p><span>Tag:</span> Musical Instrument, Saxophone</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-overview-area col-lg-12 col-md-12 col-sm-12">
                                    <div class="overview-content">
                                        <ul class="product-view-tab">
                                            <li class="active"><a href="#details" data-toggle="tab" aria-expanded="true">Description</a></li>
                                            <li class=""><a href="#review" data-toggle="tab" aria-expanded="false">Review</a></li>
                                            <li class=""><a href="#information" data-toggle="tab" aria-expanded="false">Information</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="details">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
                                                </p>
                                            </div>
                                            <div class="tab-pane" id="review">
                                                <h3>Reviewing: Single Product Title</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
                                                </p>
                                                <div class="review">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                                                        <li class="inactive"><a href="#"><i class="fa fa-star"></i></a></li>
                                                    </ul>
                                                    <p>(12 customer review)</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="information">
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                </p>
                                                <ul class="product-information">
                                                    <li>Weight: 20kg</li>
                                                    <li>Width: 2m</li>
                                                    <li>Height: 3m</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
                                                    <div class="seller-title"><a href="#">Product title Here</a></div>
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
                                                    <div class="seller-title"><a href="#">Product title Here</a></div>
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
                                                    <div class="seller-title"><a href="#">Product title Here</a></div>
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
                        <!-- End Sidebar part -->
                    </div>
                </div>
            </div>
            <!-- End Single product area -->
@endsection
