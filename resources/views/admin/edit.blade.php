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
<h4>Edit Blog Post</h4>
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Added On</th>
      <th scope="col">Updated On</th>
    </tr>
  </thead>
  <tbody>
      @foreach($posts as $key=>$post)
    <tr id="{{$post->id}}" onclick="window.location.href='/admin/modify-post/{{$post->id}}'">
      <th scope="row">{{$key + 1}}</th>
      <td>{{$post->post_title}}</td>
      <td>{{$post->created_at->diffForHumans()}}</td>
      <td>{{$post->updated_at->diffForHumans()}}</td>
    </tr>
    @endforeach
  
  </tbody>
</table>

@stop