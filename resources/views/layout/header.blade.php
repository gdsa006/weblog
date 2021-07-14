    <!-- =============================================
						HEADER AND BANNER
	============================================= -->

    <header id="homenav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div class="col-md-2 col-md-push-1 col-xs-1 col-xs-push-3">
                    <div class="logowrap" data-aos="fade-down">
                        <a href="/"><img src="/images/logo.png" alt="YouTruth"></a>
                    </div>
                </div>
                <div class="col-md-7 col-md-pull-1 col-xs-10 col-xs-pull-6">
                    <div class="navigate" data-aos="fade-down">
                        <nav class="{{ (Request::is('login') || Request::is('admin/*') || Request::is('resources') ? 'nav2' : 'nav') }}">
                            <div class="nav-mobile">
                                <i class="fas fa-bars item_menu"></i>
                            </div>

                            @if(Request::is('articles*') || Request::is('login'))
                            
                            @else
                            <ul>
                                <li><a href="{{ (Request::is('login') || Request::is('admin/*') || Request::is('resources') ? '/' : '#videoBanner') }}">Home</a></li>
                                <li><a href="{{ (Request::is('login') || Request::is('admin/*') || Request::is('resources') ? '/#news' : '#news') }}">Articles</a></li>
                                <li><a href="{{ (Request::is('login') || Request::is('admin/*') || Request::is('resources') ? '/#who-we-are' : '#who-we-are') }}">Roadmap</a></li>
                            </ul>
                            @endif 
                            
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-md-pull-1 col-xs-12 col-xs-pull-0 logIn">
                <a class="outline" data-id="8EoSXrHjjk0" data-toggle="modal" data-target=".bd-example-modal-xl" href="" data-scrolltime="1500">Log In</a>
                <a data-id="8EoSXrHjjk0" data-toggle="modal" data-target=".bd-example-modal-xl" href="" data-scrolltime="1500">Signup</a>
                </div>
            </div>
        </div>
    </div>
</header>
<style>
nav.menu {
    font-family: 'Roboto', sans-serif;
    width: 300px;
    /* height: 92vh; */
    /* height: 100vh; */
    /* min-height: calc(100vh - 121px); */
    background-color: #ffffff;
    /* position: absolute; */
    position: fixed;
    left: -500px;
    transition: .3s all;
    z-index: 9;
    overflow: hidden;
    overflow-y: auto;
    /* top: 65px; */
    top: 0px;
    bottom: 0px;
}

@media screen and (max-width: 360px)
{
nav.menu {
    width: 100%;
    z-index: 9999;
}
}
.menu_show {
    left: 0 !important;
}

nav.menu > a:hover {
    background: #f4f4f4;
    text-decoration: none;
}

nav.menu > a {
    display: block;
    padding: 12px 38px;
    margin: 0;
    color: #666666;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 14px;
}

.menu .fa {
    width: 21px;
    color: #666;
    text-align: center;
    margin: 0px 20px 0px 0px;
    font-size: 15px;
    position: relative;
    top: 2px;
}

img.tivid-logo {
    width: 135px;
    padding: 4px 4px;
    /* margin: 0 10px; */
}

nav.menu > a {
    display: block;
    padding: 12px 38px;
    margin: 0;
    color: #666666;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 14px;
}

.menu .fa {
    width: 21px;
    color: #666;
    text-align: center;
    margin: 0px 20px 0px 0px;
    font-size: 15px;
    position: relative;
    top: 2px;
}
</style>

<nav class="menu pb-4" id="sidebar-navigation">
  <a href="#/home" style="background-color: #cccccc36;display: flex;">
    <i class="fa fa-bars item_menu" aria-hidden="true" style="font-size: 24px;padding-top: 9px;margin-right: 0px;"></i>
    <div class="flex-1 ml-2">
      <img src="/images/logo.png" alt="TI_Videos LOGO" class="tivid-logo">
    </div>
  </a>
  <a href="#/home" class="item_menu"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
  <a href="#/video/category?name=TRENDING_VIDEOS" class="item_menu page-view"><i class="fa fa-fire" aria-hidden="true"></i>Trending</a>
  <a href="#/video/category?name=LATEST_VIDEOS" class="item_menu page-view"><i class="fa fa-flag" aria-hidden="true"></i>Latest Videos</a>
  <a href="#/video/category?name=TOP_VIDEOS" class="item_menu page-view"><i class="fa fa-play-circle" aria-hidden="true"></i>Top Videos</a>
  <!-- <a href="#/video/cate    gory?name=ARTICLES_VIDEOS" class="item_menu page-view"><i class="fa fa-file-alt"aria-hidden="true"></i>Articles</a> -->
    
  <hr>
  <a href="#/video/category?name=PEACE&amp;id=1" class="item_menu page-view"><i class="fa fa-volume-off" aria-hidden="true"></i>PEACE</a><a href="#/video/category?name=LOVE&amp;id=2" class="item_menu page-view"><i class="fa fa-heart" aria-hidden="true"></i>LOVE</a><a href="#/video/category?name=INSPIRING&amp;id=3" class="item_menu page-view"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>INSPIRING</a><a href="#/video/category?name=HEALING&amp;id=4" class="item_menu page-view"><i class="fa fa-battery-three-quarters" aria-hidden="true"></i>HEALING</a><a href="#/video/category?name=SCIENCE&amp;id=5" class="item_menu page-view"><i class="fa fa-microscope" aria-hidden="true"></i>SCIENCE</a><a href="#/video/category?name=LIBERATION&amp;id=6" class="item_menu page-view"><i class="fa fa-shoe-prints" aria-hidden="true"></i>LIBERATION</a><a href="#/video/category?name=MONETARY&amp;id=7" class="item_menu page-view"><i class="fa fa-money-bill-alt" aria-hidden="true"></i>MONETARY</a><a href="#/video/category?name=ENERGY&amp;id=8" class="item_menu page-view"><i class="fa fa-sun" aria-hidden="true"></i>ENERGY</a><a href="#/video/category?name=MUSIC&amp;id=9" class="item_menu page-view"><i class="fa fa-music" aria-hidden="true"></i>MUSIC</a><a href="#/video/category?name=HUMOR&amp;id=10" class="item_menu page-view"><i class="fa fa-theater-masks" aria-hidden="true"></i>HUMOR</a></nav>





