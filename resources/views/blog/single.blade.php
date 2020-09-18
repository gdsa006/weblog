@extends('layout/base')
@section('content')



<section id="post">
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <h1>{{$post->post_title}}</h1>
                <span>{{$post->created_at->format('M d, Y')}}</span>
                <div class="blog-image">
                    <img src="/images/uploads/{{$post->image}}" class="img-responsive" style="max-height: 400px;min-height: 400px;">
                </div>
                <div class="blog-desc">
                {!! $post->post_body !!}
                </div>
            </div>
            <div class="col-md-4">
                <div id="sidebar">
                <div class="recent-post">
                    <div class="widget-title">
                    <h4>Recent Post</h4>
                    </div>
                    <hr>
                    <ul>
                        @foreach($recent as $new)
                        <li class="row">
                            <a href="/blog/{{$new->slug}}">
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
                                <a class="nav-link collapsed text-truncate px-0 d-inline" href=<?php echo '/blog/' . $exploded[0] . '/' . $exploded[1] ?>>{{ $date }}</a>
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