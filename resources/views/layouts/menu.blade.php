<div class="col-lg-9 col-md-9 col-sm-10">
    <div class="main-menu">
        <nav>
            <ul>
            <li class="{{Request::is('home*') ? 'active' : ''}}"><a href="/home">Home</a></li>
            <li class="{{Request::is('about*') ? 'active' : ''}}"><a href="/about">About</a></li>
            <li class="{{Request::is('classes*') ? 'active' : ''}}"><a href="/classes">Classes</a>
                <ul>
                    <li><a href="#">Classes</a></li>
                    <li><a href="#">Single Classes</a></li>
                </ul>
            </li>
            <li class="{{Request::is('schedule*') ? 'active' : ''}}"><a href="/schedule">Schedule</a></li>
            <li class="{{Request::is('trainer*') ? 'active' : ''}}"><a href="page/trainer.html">Trainers</a></li>
            <li class="{{Request::is('news*') ? 'active' : ''}}"><a href="/news">News</a></li>
            <li class="{{Request::is('pages*') ? 'active' : ''}}"><a href="/pages">Pages</a>
                <ul class="mega-menu-dropdown">
                    <li class="single-mega-menu">
                        <a href="#">Home</a>
                        <a href="#">About</a>
                        <a href="#">Classes</a>
                        <a href="#">Schedule</a>
                        <a href="#">Gallery</a>
                    </li>
                    <li class="single-mega-menu">
                        <a href="#">Our Trainer</a>
                        <a href="#">Trainer Details</a>
                        <a href="#">Single Classes</a>
                        <a href="#">News</a>
                        <a href="#">News Details</a>
                    </li>
                    <li class="single-mega-menu">
                        <a href="#">Store Grid View</a>
                        <a href="#">Store List View</a>
                        <a href="#">Single product</a>
                        <a href="#">Single Page</a>
                        <a href="#">404 Page</a>
                    </li>
                </ul>
            </li>
            <li class="{{Request::is('contact*') ? 'active' : ''}}"><a href="contact">Contact</a></li>
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
            </ul>
        </nav>
    </div>
</div>