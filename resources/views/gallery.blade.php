@extends('layouts.app', ['title' => 'Gallery'])
@section('content')
            <!-- Start Inner Banner area -->
            <div class="inner-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="innter-title">
                            <h2>Gallery</h2>
                        </div>
                        <div class="breadcrum-area">
                            <ul class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li class="active">Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Inner Banner area -->
            <!-- Gallery Area Start Here -->
            <div class="gallery-area padding-space">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="isotop-classes-tab isotop-btn">
                                <a href="#" data-filter="*" class="current">All</a>
                                <a href="#" data-filter=".Yoga">Yoga</a>
                                <a href="#" data-filter=".Running">Running</a>
                                <a href="#" data-filter=".Gym">Gym</a>
                                <a href="#" data-filter=".Fitness">Fitness</a>
                            </div>
                        </div>
                    </div>
                    <div class="row portfolioContainer gallery-wrapper zoom-gallery">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Yoga Gym">
                            <div class="gallery-box">
                                <img src="img/gallery/1.jpg" class="img-responsive" alt="gallery">
                                <div class="gallery-content">
                                    <a href="img/gallery/1.jpg" class="elv-zoom" title="Fitness"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Running Gym Fitness">
                            <div class="gallery-box">
                                <img src="img/gallery/2.jpg" class="img-responsive" alt="gallery">
                                <div class="gallery-content">
                                    <a href="img/gallery/2.jpg" class="elv-zoom" title="Push Up"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Yoga Running Fitness">
                            <div class="gallery-box">
                                <img src="img/gallery/3.jpg" class="img-responsive" alt="gallery">
                                <div class="gallery-content">
                                    <a href="img/gallery/3.jpg" class="elv-zoom" title="Weight Lifting"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Yoga Gym">
                            <div class="gallery-box">
                                <img src="img/gallery/4.jpg" class="img-responsive" alt="gallery">
                                <div class="gallery-content">
                                    <a href="img/gallery/4.jpg" class="elv-zoom" title="Free Hand"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 room Gym Fitness">
                            <div class="gallery-box">
                                <img src="img/gallery/5.jpg" class="img-responsive" alt="gallery">
                                <div class="gallery-content">
                                    <a href="img/gallery/5.jpg" class="elv-zoom" title="Body Building"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Yoga campus">
                            <div class="gallery-box">
                                <img src="img/gallery/6.jpg" class="img-responsive" alt="gallery">
                                <div class="gallery-content">
                                    <a href="img/gallery/6.jpg" class="elv-zoom" title="Gym"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Gallery Area End Here -->
@endsection
