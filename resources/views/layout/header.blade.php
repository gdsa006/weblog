    <!-- =============================================
						HEADER AND BANNER
	============================================= -->

    <header id="homenav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logowrap" data-aos="fade-down">
                        <a href="/"><img src="/images/logo.png" alt="NADACA"></a>
                    </div>

                    <div class="navigate" data-aos="fade-down">
                        <nav class="{{ (Request::is('login') || Request::is('admin/*') || Request::is('resources') ? 'nav2' : 'nav') }}">
                            <div class="nav-mobile">
                                <i class="fas fa-bars"></i>
                            </div>
                            <ul>
                                <li><a href="{{ (Request::is('login') || Request::is('admin/*') || Request::is('resources') ? '/' : '#videoBanner') }}">Home</a></li>
                                <li><a href="{{ (Request::is('login') || Request::is('admin/*') || Request::is('resources') ? '/#who-we-are' : '#who-we-are') }}">WHO WE ARE</a></li>
                                <li><a href="{{ (Request::is('login') || Request::is('admin/*') || Request::is('resources') ? '/#what-we-do' : '#what-we-do') }}">WHAT WE DO</a></li>
                                <li><a href="{{ (Request::is('login') || Request::is('admin/*') || Request::is('resources') ? '/#getHelp' : '#getHelp') }}">GET HELP</a></li>
                                <li><a href="{{ (Request::is('login') || Request::is('admin/*') || Request::is('resources') ? '/#news' : '#news') }}">NEWS</a></li>
                                <li><a href="/resources" class="{{ Request::is('resources') ? 'active' : '' }}">RESOURCES</a></li>
                                <li class=" logIn"><a data-id="8EoSXrHjjk0" data-toggle="modal" data-target=".bd-example-modal-xl" href="" data-scrolltime="1500">Get Started</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>





