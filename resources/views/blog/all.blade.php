@extends('layout/base')
@section('content')



<section id="post">
<div class="container breadcrumbs">
    <div class="">
    <a href="#" class="">Home</a> <a href="/articles"  class="active">Articles</a>
    </div>
</div>
    <div class="container">

        <div class="row">
            <div class="col-md-8">
            @foreach($posts as $post)
                <div class="col-md-12 data" style="margin: 10px 0;">
                    <a href="/articles/{{$post->slug}}">
                  <p>{{$post->post_title}}</p>
                  <span>June 26, 2018</span>
                  <div class="blog-image">
                  <img src="/images/uploads/{{$post->image}}" class="img-responsive">
                  </div>
                </a>
                </div>
                <div class="divseprator" style="float: left; width: 100%"></div>
          @endforeach 
          <div class="col-md-12">
              <div class="row text-center">
          {{$posts->render()}}
              </div>
          </div>     
            </div>
            <div class="col-md-4">
                <div id="sidebar">
                <div class="recent-post">
                    <div class="widget-title">
                    <h4>Search</h4>
                    </div>
                    <hr>
                    <ul>
                        <li><form method="GET" action="/search"><input type="text" name="term" class="form-control" placeholder="search post..."></form></li>
                    </ul>
                </div>
                <div class="recent-post">
                    <div class="widget-title">
                    <h4>Recent Post</h4>
                    </div>
                    <hr>
                    <ul>
                        @foreach($recent as $new)
                        <li class="row">
                            <a href="/articles/{{$new->slug}}">
                            <div class="col-md-4">
                                <div class="blog-image">
                                    <img src="/images/uploads/{{$new->image}}">
                                </div>
                            </div>
                            <div class="col-md-8 right">
                                <h5>
                                    {{$new->post_title}}
                                </h5>
                                <span>{{$new->created_at->format('M d, Y')}}</span>
                            </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>






                <div class="post-archive">
                    <div class="widget-title">
                    <h4>Archive</h4>
                    </div>
                    <hr>
                    <ul>
                    @foreach($data as $date => $posts)
                    <li class="nav-item">
                            <?php
                        $exploded = explode(" ",$date);
                        ?>
                            <span class="d-inline">    
                                <a class="nav-link collapsed text-truncate px-0 d-inline" href=<?php echo '/articles/' . $exploded[0] . '/' . $exploded[1] ?>>{{ $date }}</a>
                             </span>
                        </li>
                        @endforeach
                    </ul>
</div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop