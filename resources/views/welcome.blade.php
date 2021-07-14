@extends('layout/base')
@section('content')
<section id="videoBanner" class="transform-center-parent">
        <!-- <div class="video-background-overlay"></div> -->
        <!-- <div class=" col-md-12">
            <img src="/images/logo.png" alt="NADACA" width=300 style="margin: 0 auto; display: block; margin-bottom: 50px">    
        </div> -->
        <div class=" col-md-12">
            <h1>National Association of Debt and Credit Advocates</h1>
            <span>Educate . Advocate . Protect</span>
        </div>
        <div class="col-md-8 col-md-offset-2">
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" width="100%" height="100%">
            <source src="images/video.mp4" type="video/mp4">
        </video>
        </div>

       
    </section>



    <!-- =============================================
						ARTICLES
	============================================= -->

    <section id="news">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title">
                        <h2 data-aos="fade-down" data-aos-easing="ease" data-aos-delay="200">Articles</h2>
                        <!-- <p data-aos="fade-down" data-aos-easing="ease" data-aos-delay="400">AVO Realty is a team of experienced, licensed real estate agents serving the Austin, San Antonio, & Houston areas. With a proven track record of getting results quickly and a direct line of communication at all times.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
@foreach($posts as $post)
                <div class="col-md-4">
                    <div class="wrapper">
                    <a href="articles/{{$post->slug}}">
                  <p>{{$post->post_title}}</p>
                  <span>June 26, 2018</span>
                  <div class="blog-image">
                  <img src="/images/uploads/{{$post->image}}" class="img-responsive">
                  </div>
                </a>
                    </div>
                </div>
          @endforeach      
            </div>
            <!-- <div style="text-align: center; padding: 40px 0"><a class="btn oval-btn" href="/blog">View All</a></div> -->
    </section>



    <!-- =============================================
						ROADMAP
	============================================= -->

    <section id="who-we-are">
        <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="sec-title">
                        <h2 data-aos="fade-down" data-aos-easing="ease" data-aos-delay="200">Roadmap</h2>
                        <!-- <p data-aos="fade-down" data-aos-easing="ease" data-aos-delay="400">AVO Realty is a team of experienced, licensed real estate agents serving the Austin, San Antonio, & Houston areas. With a proven track record of getting results quickly and a direct line of communication at all times.</p> -->
                    </div>
                </div>


                <div class="container">
    <!-- <div class="page-header text-center">
        <h1 id="timeline">&nbsp;</h1>
    </div> -->
    <ul class="timeline">
        <li data-aos="slide-right" data-aos-easing="ease" data-aos-delay="20000">
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="Q1 2021" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <img class="img-responsive" src="http://lorempixel.com/1600/500/sports/2" />
              
            </div>
            <div class="timeline-body">
              <h4>Q1 2020</h4>
              <h5>Creator Analytics and Reporting</h5>
              <p>Creators must receive prompt, regular, and useful reports about how their content is performing and behaving on the LBRY network.</p>
              <h5>Success</h5>
                <ol>
                    <li>Creators have an in-app dashboard allowing them to view content performance, including views, follows, tips/supports, and claim staking status.</li>
                    <li>Creators receive regular content reports via email.</li>
                </ol>
              
            </div>
            
            <div class="timeline-footer">
                <a class="icon"><span class="ion-android-open"></span></a>
              <a class="icon" rel="modalShare"><span class="ion-android-share-alt"></span></a>
                <a class="pull-right">&nbsp;</a>
            </div>
          </div>
        </li>
        
        <li  class="timeline-inverted" data-aos="slide-left" data-aos-easing="ease" data-aos-delay="20000">
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="Q1 2021" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <img class="img-responsive" src="http://lorempixel.com/1600/500/sports/2" />
              
            </div>
            <div class="timeline-body">
              <h4>Q1 2020</h4>
              <h5>Creator Analytics and Reporting</h5>
              <p>Creators must receive prompt, regular, and useful reports about how their content is performing and behaving on the LBRY network.</p>
              <h5>Success</h5>
                <ol>
                    <li>Creators have an in-app dashboard allowing them to view content performance, including views, follows, tips/supports, and claim staking status.</li>
                    <li>Creators receive regular content reports via email.</li>
                </ol>
              
            </div>
            
            <div class="timeline-footer">
                <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                <a><i class="glyphicon glyphicon-share"></i></a>
                <a class="pull-right">&nbsp;</a>
            </div>
          </div>
        </li>
        <li data-aos="slide-right" data-aos-easing="ease" data-aos-delay="20000">
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="Q1 2021" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <img class="img-responsive" src="http://lorempixel.com/1600/500/sports/2" />
              
            </div>
            <div class="timeline-body">
              <h4>Q1 2020</h4>
              <h5>Creator Analytics and Reporting</h5>
              <p>Creators must receive prompt, regular, and useful reports about how their content is performing and behaving on the LBRY network.</p>
              <h5>Success</h5>
                <ol>
                    <li>Creators have an in-app dashboard allowing them to view content performance, including views, follows, tips/supports, and claim staking status.</li>
                    <li>Creators receive regular content reports via email.</li>
                </ol>
              
            </div>
            
            <div class="timeline-footer">
                <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                <a><i class="glyphicon glyphicon-share"></i></a>
                <a class="pull-right">&nbsp;</a>
            </div>
          </div>
        </li>
        
        <li  class="timeline-inverted" data-aos="slide-left" data-aos-easing="ease" data-aos-delay="20000">
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="Q1 2021" id=""></i></a></div>
          <div class="timeline-panel">
          <div class="timeline-body">
              <h4>Q1 2020</h4>
              <h5>Creator Analytics and Reporting</h5>
              <p>Creators must receive prompt, regular, and useful reports about how their content is performing and behaving on the LBRY network.</p>
              <h5>Success</h5>
                <ol>
                    <li>Creators have an in-app dashboard allowing them to view content performance, including views, follows, tips/supports, and claim staking status.</li>
                    <li>Creators receive regular content reports via email.</li>
                </ol>
              
            </div>
            
            <div class="timeline-footer">
                <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                <a><i class="glyphicon glyphicon-share"></i></a>
                <a class="pull-right">&nbsp;</a>
            </div>
          </div>
        </li>
        <li data-aos="slide-right" data-aos-easing="ease" data-aos-delay="20000">
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="Q1 2021" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <img class="img-responsive" src="http://lorempixel.com/1600/500/sports/2" />
              
            </div>
            <div class="timeline-body">
              <h4>Q1 2020</h4>
              <h5>Creator Analytics and Reporting</h5>
              <p>Creators must receive prompt, regular, and useful reports about how their content is performing and behaving on the LBRY network.</p>
              <h5>Success</h5>
                <ol>
                    <li>Creators have an in-app dashboard allowing them to view content performance, including views, follows, tips/supports, and claim staking status.</li>
                    <li>Creators receive regular content reports via email.</li>
                </ol>
              
            </div>
            
            <div class="timeline-footer">
                <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                <a><i class="glyphicon glyphicon-share"></i></a>
                <a class="pull-right">&nbsp;</a>
            </div>
          </div>
        </li>
        
        <li  class="timeline-inverted" data-aos="slide-left" data-aos-easing="ease" data-aos-delay="20000">
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record invert" rel="tooltip" title="Q1 2021" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <img class="img-responsive" src="http://lorempixel.com/1600/500/sports/2" />
              
            </div>
            <div class="timeline-body">
              <h4>Q1 2020</h4>
              <h5>Creator Analytics and Reporting</h5>
              <p>Creators must receive prompt, regular, and useful reports about how their content is performing and behaving on the LBRY network.</p>
              <h5>Success</h5>
                <ol>
                    <li>Creators have an in-app dashboard allowing them to view content performance, including views, follows, tips/supports, and claim staking status.</li>
                    <li>Creators receive regular content reports via email.</li>
                </ol>
              
            </div>
            
            <div class="timeline-footer primary">
                <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
                <a><i class="glyphicon glyphicon-share"></i></a>
                <a class="pull-right">&nbsp;</a>
            </div>
          </div>
        </li>
        
        <li class="clearfix" style="float: none;"></li>
    </ul>
</div>


<!-- ==================== -->

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Do you want to save changes you made to document before closing?</p>
                <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </section>



    @stop