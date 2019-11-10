@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-3 text-center">
            <img src="{{$data->avatar}}" class="rounded-circle" style="width: 200px; height: 200px;">
        </div>
        <div class="col-7">
        <h3> {{$data->name}} </h3>
        <br>
        <a href="/editprofile">Edit Profile</a>
      <p><b>{{ $data->posts->count() }}</b> Post</p>
      <div class="">
        <b>{{ $data->title }}</b><br>
        {{ $data->description }}<br>
        <a href="https://{{ $data->url }}">{{ $data->url }}</a><br>
      </div>
    

    </div>
        <div class="col-2">
            <a href="/addpost">Add New Post</a>
        </div>
  </div>

    <div class="row justify-content-left mb-5">
    @foreach($data->posts as $post)
    <div class="col-md-4">
    <a href="/post/{{ $post->id }}">
        <img src="{{$post->image}}" height="300px" width="300px">
    </a>
    </div>
    @endforeach
  </div>
  </div>
</div>
@endsection

<style>
.card{
    margin-bottom:30px;
}
</style>