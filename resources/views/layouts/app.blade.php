<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title')
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{!!asset('img/favicon.ico')!!}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Owl Caousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('vendor/OwlCarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/OwlCarousel/owl.theme.default.min.css') }}">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- nivo slider CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/custom-slider/css/nivo-slider.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/custom-slider/css/preview.css') }}" type="text/css" media="screen" />
    <!-- flaticon CSS
        ============================================ -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}">
    <!-- Wow CSS
        ============================================ -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/site.css') }}">
    <!-- Switch Style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">
    <!-- Magic popup CSS
        ============================================-->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>
<body>
        <!-- Start wrapper -->
        <div class="wrapper">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <!-- Start Header area -->
        <header class="main-header header-style1" id="sticker">
            <!-- Start Header Top Area -->
            <div class="header-top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="logo-area">
                                <a href="#"><img src="{!! asset('img/logo.png')!!} " alt="logo"></a>
                            </div>
                        </div>
                        <!-- start menu -->
                        @include('layouts.menu')
                        <!-- end menu -->
                        <div class="col-lg-1 col-md-1 hidden-sm">
                            <div class="header-top-right">
                                <ul>
                                    <li>
                                        <div class="header-top-search search-box">
                                            <form>
                                                <input class="search-text" type="text" placeholder="Search Here...">
                                                <a class="search-button" href="#">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </form>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#" class="cart-area floatright">
                                            <i class="fa fa-shopping-cart"></i><span>2</span>
                                        </a>
                                        <ul>
                                            <li>
                                                <div class="cart-single-product">
                                                    <div class="media">
                                                        <div class="pull-left cart-product-img">
                                                            <a href="#">
                                                                <img class="media-object" src="{!!asset('img/product/cart-img.png')!!}" alt="product">
                                                            </a>
                                                        </div>
                                                        <div class="media-body cart-content">
                                                            <h4 class="media-heading"><a href="#">Product Title Here</a></h4>
                                                            <a href="#" class="trash"><i class="fa fa-trash-o"></i></a>
                                                            <p>Quantity : 1</p>
                                                            <div class="cart-product-price">
                                                                <a href="#">$49</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-single-product">
                                                    <div class="media">
                                                        <div class="pull-left cart-product-img">
                                                            <a href="#">
                                                                <img class="media-object" src="{!! asset('img/product/cart-img.png')!!}" alt="product">
                                                            </a>
                                                        </div>
                                                        <div class="media-body cart-content">
                                                            <h4 class="media-heading"><a href="#">Product Title Here</a></h4>
                                                            <a href="#" class="trash"><i class="fa fa-trash-o"></i></a>
                                                            <p>Quantity : 1</p>
                                                            <div class="cart-product-price">
                                                                <a href="#">$99</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="http://www.radiustheme.com/demo/html/gymedge/multi-page/checkout.html" class="checkout-button">Checkout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </header>
            <!-- End header Top Area -->
                    <!-- Start slider area  -->

        <!-- Start Content Area-->
            @yield('content')
        <!-- end content -->
        <!-- Start footer Area -->
        <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="about-company">
                                <h3>About Company</h3>
                                <p>Praesent vel rutrum purus. Nam vel dui eu risus duis dignissim dignissim. Suspen disse at eros tempus, congueconsequat.Fusce sit amet urna feugiat.Praesent vel rutrum purus. Nam vel dui eu risus.</p>
                                <div class="social-icons">
                                    <ul class="social-link">
                                        <li class="first">
                                            <a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="second">
                                            <a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="third">
                                            <a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="fourth">
                                            <a class="pint" href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="five">
                                            <a class="skype" href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="last">
                                            <a class="youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="twitter-area">
                                <h3>Twitter Feed</h3>
                                <div class="twitter-list">
                                    <ul>
                                        <li>
                                            <p><i class="fa fa-twitter" aria-hidden="true"></i>Looking for an awesome CREATIVE WordPress Theme? Esquise run even better.</p>
                                            <a href="#">http://t.co/0WWEMQEQ48</a>
                                            <p><span>3 Days ago</span></p>
                                        </li>
                                        <li>
                                            <p><i class="fa fa-twitter" aria-hidden="true"></i>Looking for an awesome CREATIVE WordPress Theme? Esquise run even better.</p>
                                            <a href="#">http://t.co/0WWEMQEQ48</a>
                                            <p><span>3 Days ago</span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="flickr-photos">
                                <h3>Flickr Photos</h3>
                                <div class="flickr-list">
                                    <ul>
                                        <li>
                                            <a class="fancybox" href="{{asset('img/flickr/flickr1.png')}}" data-fancybox-group="flickr" title="flickr1"><img src="img/flickr/flickr1.png" alt="flickr1"></a>
                                        </li>
                                        <li>
                                            <a class="fancybox" href="{{asset('img/flickr/flickr2.png')}}" data-fancybox-group="flickr" title="flickr2"><img src="img/flickr/flickr2.png" alt="flickr2"></a>
                                        </li>
                                        <li>
                                            <a class="fancybox" href="{{asset('img/flickr/flickr3.png')}}" data-fancybox-group="flickr" title="flickr3"><img src="img/flickr/flickr3.png" alt="flickr3"></a>
                                        </li>
                                        <li>
                                            <a class="fancybox" href="{{asset('img/flickr/flickr4.png')}}" data-fancybox-group="flickr" title="flickr4"><img src="img/flickr/flickr4.png" alt="flickr4"></a>
                                        </li>
                                        <li>
                                            <a class="fancybox" href="{{asset('img/flickr/flickr5.png')}}" data-fancybox-group="flickr" title="flickr5"><img src="img/flickr/flickr5.png" alt="flickr5"></a>
                                        </li>
                                        <li>
                                            <a class="fancybox" href="{{asset('img/flickr/flickr6.png')}}" data-fancybox-group="flickr" title="flickr6"><img src="img/flickr/flickr6.png" alt="flickr6"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="corporate-office">
                                <h3>Corporate Office</h3>
                                <div class="corporate-address">
                                    <ul>
                                        <li><i class="fa fa-send" aria-hidden="true"></i>44 New Design Street, rne 005</li>
                                        <li><i class="fa fa-phone" aria-hidden="true"></i>(01) 800 433 633</li>
                                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@gymedge.com</li>
                                        <li><i class="fa fa-fax" aria-hidden="true"></i>Fax : (123) 4657890</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End footer Area -->
    <a href="#" class="scrollToTop"></a>
    <!-- jquery
    ============================================ -->
    <script src="{{ asset('js/vendor/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-tabcollapse.js') }}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
    <!-- Owl Cauosel JS
        ============================================ -->
    <script src="{{ asset('vendor/OwlCarousel/owl.carousel.min.js') }}" type="text/javascript"></script>
    <!-- Nivo slider js
        ============================================ -->
    <script src="{{ asset('css/custom-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('css/custom-slider/home.js') }}" type="text/javascript"></script>
    <!-- Zoom JS
        ============================================ -->
    <script src="{{ asset('js/jquery.zoom.js') }}"></script>
    <!-- Isotope JS
        ============================================ -->
    <script src="{{ asset('js/isotope.pkgd.js') }}"></script>
    <!-- Counter Up JS
        ============================================ -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Magic Popup js
        ============================================-->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
    <!-- Wow JS
        ============================================ -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>