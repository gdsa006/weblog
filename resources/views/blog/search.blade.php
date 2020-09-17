@extends('layout/base')
@section('content')



<section id="post">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <h4>Search results for: {{$term}}</h4>
            <hr>
            </div>
            @foreach($results as $result)
            <div class="col-md-8 col-md-offset-2">
                <h1>{{$result->post_title}}</h1>
                <span>{{$result->created_at->format('M d, Y')}}</span>
                <div class="blog-image">
                    <img src="/images/uploads/{{$result->image}}" class="img-responsive" style="max-height: 400px;min-height: 400px;">
                </div>
                <div class="blog-desc">
                {!! $result->post_body !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@stop