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
                                <li><a href="#">Pages</a></li>
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
                                <div class="online-header">
                                    <div class="pager-area">
                                        <div class="pager-left-area col-lg-6 col-md-6 col-sm-6">
                                            <div class="view-mode pull-left">
                                                <ul>
                                                    <li class="active" role="presentation"><a href="#gried-view" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                                                    <li role="presentation"><a href="#list-view" role="tab" data-toggle="tab"><i class="fa fa-list"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="limit-show media-body">
                                                <label>Show</label>
                                                <select>
                                                    <option selected="selected" value="#">9</option>
                                                    <option value="#">3</option>
                                                    <option value="#">6</option>
                                                    <option value="#">12</option>
                                                    <option value="#">15</option>
                                                </select>&nbsp;pages
                                            </div>
                                        </div>
                                        <div class="pager-right-area col-lg-6 col-md-6 col-sm-6">
                                            <div class="shor-list">
                                                <select>
                                                    <option selected="selected" value="#">Default Sorting</option>
                                                    <option value="#">Product Name</option>
                                                    <option value="#">Product Id</option>
                                                    <option value="#">Product SKU</option>
                                                    <option value="#">Manufacturer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="gried-view">
                                        <!-- Start online grid view -->
                                        <div class="category-product-grid">
                                            <!-- Start Single product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                                <div class="online-product">
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
                                                    <h3 class="name"><a href="single-product.html">Product Title Here</a></h3>
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
                                            <!-- End Single product -->
                                            <!-- Start Single product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                                <div class="online-product">
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
                                                    <h3 class="name"><a href="single-product.html">Product Title Here</a></h3>
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
                                            <!-- End Single product -->
                                            <!-- Start Single product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                                <div class="online-product">
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
                                                    <h3 class="name"><a href="single-product.html">Product Title Here</a></h3>
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
                                            <!-- End Single product -->
                                            <!-- Start Single product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                                <div class="online-product">
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
                                                    <h3 class="name"><a href="single-product.html">Product Title Here</a></h3>
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
                                            <!-- End Single product -->
                                            <!-- Start Single product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                                <div class="online-product">
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
                                                    <h3 class="name"><a href="single-product.html">Product Title Here</a></h3>
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
                                            <!-- End Single product -->
                                            <!-- Start Single product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                                <div class="online-product">
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
                                                    <h3 class="name"><a href="single-product.html">Product Title Here</a></h3>
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
                                            <!-- End Single product -->
                                            <!-- Start Single product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                                <div class="online-product">
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
                                                    <h3 class="name"><a href="single-product.html">Product Title Here</a></h3>
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
                                            <!-- End Single product -->
                                            <!-- Start Single product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                                <div class="online-product">
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
                                                    <h3 class="name"><a href="single-product.html">Product Title Here</a></h3>
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
                                            <!-- End Single product -->
                                            <!-- Start Single product -->
                                            <div class="col-lg-4 col-md-4 col-sm-6 item">
                                                <div class="online-product">
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
                                                    <h3 class="name"><a href="single-product.html">Product Title Here</a></h3>
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
                                            <!-- End Single product -->
                                        </div>
                                        <!-- End online grid view -->
                                    </div>
                                    <!-- Start online List view -->
                                    <div role="tabpanel" class="tab-pane" id="list-view">
                                        <div class="category-product-list">
                                            <!-- Start product list -->
                                            <div class="single-product-list">
                                                <div class="product-list-image col-lg-4 col-md-4 col-sm-4">
                                                    <div class="list-image">
                                                        <img src="img/product/product1.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="product-list-content col-lg-8 col-md-8 col-sm-8">
                                                    <div class="product-content">
                                                        <h3 class="name"><a href="single-product.html">Product Title Here</a></h3>
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
                                                        <div class="product-short-description">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis in, officiis ea quae assumenda ipsam dolores tempore illo ullam odit natus sed rem distinctio atque mollitia. Illo est accusamus laboriosam.
                                                            </p>
                                                        </div>
                                                        <div class="product-list-action">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-compress" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                                <li><a href="#">Add To Cart</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End product list -->
                                            <!-- Start product list -->
                                            <div class="single-product-list">
                                                <div class="product-list-image col-lg-4 col-md-4 col-sm-4">
                                                    <div class="list-image">
                                                        <img src="img/product/product2.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="product-list-content col-lg-8 col-md-8 col-sm-8">
                                                    <div class="product-content">
                                                        <h3 class="name"><a href="single-product.html">Product Title Here</a></h3>
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
                                                        <div class="product-short-description">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis in, officiis ea quae assumenda ipsam dolores tempore illo ullam odit natus sed rem distinctio atque mollitia. Illo est accusamus laboriosam.
                                                            </p>
                                                        </div>
                                                        <div class="product-list-action">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-compress" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                                <li><a href="#">Add To Cart</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End product list -->
                                            <!-- Start product list -->
                                            <div class="single-product-list">
                                                <div class="product-list-image col-lg-4 col-md-4 col-sm-4">
                                                    <div class="list-image">
                                                        <img src="img/product/product3.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="product-list-content col-lg-8 col-md-8 col-sm-8">
                                                    <div class="product-content">
                                                        <h3 class="name"><a href="single-product.html">Product Title Here</a></h3>
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
                                                        <div class="product-short-description">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis in, officiis ea quae assumenda ipsam dolores tempore illo ullam odit natus sed rem distinctio atque mollitia. Illo est accusamus laboriosam.
                                                            </p>
                                                        </div>
                                                        <div class="product-list-action">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-compress" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                                <li><a href="#">Add To Cart</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End product list -->
                                            <!-- Start product list -->
                                            <div class="single-product-list">
                                                <div class="product-list-image col-lg-4 col-md-4 col-sm-4">
                                                    <div class="list-image">
                                                        <img src="img/product/product4.png" alt="">
                                                    </div>
                                                </div>
                                                <div class="product-list-content col-lg-8 col-md-8 col-sm-8">
                                                    <div class="product-content">
                                                        <h3 class="name"><a href="single-product.html">Product Title Here</a></h3>
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
                                                        <div class="product-short-description">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis in, officiis ea quae assumenda ipsam dolores tempore illo ullam odit natus sed rem distinctio atque mollitia. Illo est accusamus laboriosam.
                                                            </p>
                                                        </div>
                                                        <div class="product-list-action">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-compress" aria-hidden="true"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                                <li><a href="#">Add To Cart</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End product list -->
                                        </div>
                                    </div>
                                    <!-- End online List view -->
                                </div>
                            </div>
                            <div class="pagination-area product-pagination">
                                 <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                </ul>
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
@endsection()
