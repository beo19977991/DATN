@extends('layouts.app')
@section('title')
<title>GymStar| News Detail</title>
@endsection
@section('content')
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home 01</a></li>
                                                <li><a href="index2.html">Home 02</a></li>
                                                <li><a href="index3.html">Home 03</a></li>
                                                <li><a href="index4.html">Home 04</a></li>
                                                <li><a href="index5.html">Home 05</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="classes.html">Classes</a>
                                            <ul>
                                                <li><a href="single-classes.html">Single Classes</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="schedule.html">Schedule</a></li>
                                        <li><a href="news.html">News</a>
                                            <ul>
                                                <li><a href="single-news.html">News Details</a></li>
                                                <li class="has-child-menu"><a href="#">Demo Menu</a>
                                                    <ul class="thired-level">
                                                        <li><a href="#">Demo Menu 1</a></li>
                                                        <li><a href="#">Demo Menu 2</a></li>
                                                        <li><a href="#">Demo Menu 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="page.html">Pages</a>
                                            <ul class="mega-menu-area">
                                                <li><a href="trainer.html">Our Trainer</a></li>
                                                <li><a href="single-trainer.html">Trainer Details</a></li>
                                                <li><a href="gallery.html">Gallery</a></li>
                                                <li><a href="store-grid.html">Store Grid View</a></li>
                                                <li><a href="store-list.html">Store List View</a></li>
                                                <li><a href="single-product.html">Single product</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->
            </header>
            <!-- End Header area -->
            <!-- Start Inner Banner area -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="innter-title">
                            <h2>News Details</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">News</a></li>
                                <li class="active">Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inner Banner area -->
            <!-- Start details classes area -->
            <div class="news-detail-area padding-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="single-news-detail">
                                <div class="class-content">
                                    <div class="detail-img">
                                        <img src="img/classes/class-detail-img.jpg" alt="detail-img">
                                    </div>
                                    <div class="class-heading">
                                        <h3>Running New Trend</h3>
                                        <ul>
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>28 April, 2016</li>
                                            <li><i class="fa fa-user" aria-hidden="true"></i>By Admin : <a href="#">John Smith</a></li>
                                            <li><i class="fa fa-comments-o" aria-hidden="true"></i>Comments : <a href="#">01</a></li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa cupidatat non proident.</p>
                                        <blockquote class="PoliQuote pull-left">
                                            We possess within us two minds. So far I have written ere  theronly of theewer conscious mind. within us two mind wewSo far I hheronly of theer conscious mind. within us two mind wewSo far I have only of Duis ntytonre conmind. within us two mind wew. .
                                        </blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nstrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.Lorem ipsum dolor sit amet.</p>
                                    </div>
                                    <div class="news-tag">
                                        <h3>Tags</h3>
                                        <p>builiding, construction, home, roof</p>
                                    </div>
                                    <div class="comment-section">
                                        <h3>01 Comment</h3>
                                        <div class="pull-left comment-image">
                                            <img src="img/news/comment.jpg" alt="">
                                        </div>
                                        <div class="media-body comment-content">
                                            <h4>Dr. Jessy Robot</h4>
                                            <div class="date-time">February 20, 2016 @ 09:21</div>
                                            <p>We possess within us two minds. So far I have written ere  theronly of theewer conscious mind. within us two mind wewDuis ntytonssre conwithin us two minds.</p>
                                            <div class="reply">
                                                <i class="fa fa-mail-forward" aria-hidden="true"></i><a href="#">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="leave-comment">
                                        <h3>Leave Comment</h3>
                                        <div class="comment-form">
                                            <form class="form-horizontal">
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                              <div class="col-md-12">
                                                              <input id="textinput" name="textinput" placeholder="Namer*" class="form-control input-md" required="" type="text">

                                                              </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <!-- Text input-->
                                                            <div class="form-group">
                                                              <div class="col-md-12">
                                                              <input id="email" name="email" placeholder="E-mail*" class="form-control input-md" required="" type="text">
                                                              </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- Textarea -->
                                                <div class="form-group">
                                                  <div class="col-md-12">
                                                    <textarea class="form-control" id="textarea" name="textarea">Message*</textarea>
                                                  </div>
                                                </div>
                                                <!-- Button -->
                                                <div class="form-group">
                                                  <div class="col-md-12">
                                                    <button id="singlebutton" name="singlebutton" class="btn btn-default" data-title="Send Message">Send Message</button>
                                                  </div>
                                                </div>
                                                </fieldset>
                                            </form>
                                        </div>
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
            <!-- End details classes area -->
@endsection
