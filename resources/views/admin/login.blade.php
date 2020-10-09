@extends('layout/base')
@section('content')



<section id="post" style="background-color: #f2f2f2;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">



    {{ Form::open(array('url' => 'login')) }}
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>
<div class="form-group">
    {{ Form::label('email', 'Email Address') }}
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com', 'class' => 'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password' , ['class' => 'form-control']) }}
</div>


<p>{{ Form::submit('Submit!') }}</p>
{{ Form::close() }}

<div style="color: red">
    {{ Session::get('alert-danger') }}
</div>

        </div>
        </div>
    </div>
</section>
@stop