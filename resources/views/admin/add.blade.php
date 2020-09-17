@extends('./admin/layout/base')
@section('admincontent')
@if(Session::has('alert-success'))
<div class="alert alert-success" style="position: fixed; width: 100% ">
    {{ Session::get('alert-success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<h4>Add Blog Post</h4>
<hr>
{{ Form::open(array('url' => '/admin/addNew/', 'class' => 'col-md-8')) }}
<!-- if there are login errors, show them here -->
<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', Input::old('title'), array('placeholder' => '', 'class' => 'form-control customInput')) }}
    <span class="text-danger">{{ $errors->first('title') }}</span>
</div>

<div class="form-group">
    {{ Form::label('body', 'Description') }}
    {!! Form::textarea('body', null, array('placeholder' => '', 'class' => 'form-control', 'style' => 'resize:none', 'id' => 'desc')) !!}
    <span class="text-danger">{{ $errors->first('body') }}</span>
</div>
<input type="hidden" name="image" id="blog-image">
<span class="text-danger">{{ $errors->first('image') }}</span>
<p>{{ Form::submit('Save', ['class' => 'btn btn-large btn-success']) }}</p>
{{ Form::close() }}
<form method="post" class="col-md-4" id="upload_form" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
       <label>Select File for Upload</label>
       <div class="form-inline">
            <div class="form-group">
      <input type="file" name="select_file" id="select_file" />
            </div>
            <div class="form-group">
        <input type="submit" name="upload" id="upload" class="btn btn-primary" value="Upload"> 
            </div>
       </div>
       <hr> 
    <span class="text-muted">jpg, png, gif</span>
    </div>
    <span id="uploaded_image"></span>
   </form>
@stop