@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8">
      <img class="w-100" src="{{ asset($post->image) }}" height="100%" width="100%">
    </div>
    <div class="col-4">
      <img class="rounded-circle" src="{{ asset($post->users->avatar) }}" alt="" height="50px" width="50px">
      {{ $post->users->name }}
      <hr>
      <div class="detail">
        <p>
          <b>{{ $post->users->email }}</b> <br> {{ $post->caption }}
        </p>
        @foreach($post->komentar_post as $komentar)
        <p>
          <b>{{ $komentar->users->email }}</b> {{ $komentar->comment }}
        </p>
        @endforeach
      </div>
      <hr>
      <div class="emoticon">
        <form action="/likes" method="post" style="display:inline">
          @csrf
          <button type="submit" name="button_likes" class="btn" value="{{ $post->id }}">
          <i class="fa fa-heart-o" style="color: black; font-size: 20px;"></i>
          </button>
        </form>
        <button type="button" name="button" class="btn">
        <i class="fa fa-comment-o" style="color: black; font-size: 20px;"></i>
        </button>
      </div>
      <p>{{ $post->likes }} Likes</p>
      <form action="/addcomment" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Add a comment" name="fieldkomen">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" name="postcomment" value="{{ $post->id }}">Post Comment</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection