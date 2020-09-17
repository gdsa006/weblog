    <!-- =============================================
						HEADER AND BANNER
	============================================= -->

    <header id="homenav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logowrap" data-aos="fade-down">
                        <a href="index.html"><img src="/images/avo-logo.png" alt="AVO Reality"></a>
                    </div>

                    <div class="navigate" data-aos="fade-down">
                        <nav class="nav">
                            <div class="nav-mobile">
                                <i class="fas fa-bars"></i>
                            </div>
                            <ul>
                                <li><a href="/#videoBanner">Home</a></li>
                                <li><a href="/#who-we-are">WHO WE ARE</a></li>
                                <li><a href="/#what-we-do">WHAT WE DO</a></li>
                                <li><a href="/#getHelp">GET HELP</a></li>
                                <li><a href="/#news">NEWS</a></li>
                                <li class="{{ (request()->is('resources')) ? 'active' : '' }}"><a href="/resources">RESOURCES</a></li>
                                <li class=" logIn"><a href="#joinUS" data-scrolltime="1500">Join Now</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>