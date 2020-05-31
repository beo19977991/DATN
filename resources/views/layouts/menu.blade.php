<div class="col-lg-9 col-md-9 col-sm-10">
    <div class="main-menu">
        <nav>
            <ul>
            <li class="{{Request::is('home*') ? 'active' : ''}}"><a href="/home">Home</a></li>
            <li class="{{Request::is('about*') ? 'active' : ''}}"><a href="/about">About</a></li>
            <li class="{{Request::is('page/course*') ? 'active' : ''}}"><a href="page/course">Classes</a>
            </li>
            <li class="{{Request::is('schedule*') ? 'active' : ''}}"><a href="/schedule">Schedule</a></li>
            <li class="{{Request::is('page/trainer*') ? 'active' : ''}}"><a href="page/trainer.html">Trainers</a></li>
            <li class="{{Request::is('news*') ? 'active' : ''}}"><a href="/news">News</a></li>
            <li class="{{Request::is('page/exercise*') ? 'active' : ''}}"><a href="page/exercise/pagination">Exercise</a></li>
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