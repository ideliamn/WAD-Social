@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach ($ngulang as $entry)
            <div class="card">
                <div class="card-header">
                    <center>
                    
                    </center>
                    <!-- You are logged in! -->
                    <img src="{{asset($entry->users->avatar)}}" class="rounded-circle" style="width: 50px; height: 50px;">
                    <a href="/profile">
                    <b> {{$entry->users->name}} </b>
                    </a>
                    </div>

                    <div class="card-body">
                    <a href="/post/{{ $entry->id }}">
                    <img src="{{asset($entry->image)}}" class="card-img-top">
                    </a>

                    <br>

                    <form action="/likes" method="post" style="display:inline">
                    @csrf
                    <button type="submit" name="buttonlike" class="btn" value="{{ $entry->id }}">
                    <i style="color: black; font-size: 30px;" class="fa fa-heart-o"></i>
                    </button>
                    </form>

                    <button type="button"  name="button" class="btn">
                    <i style="color: black; font-size: 30px;" class="fa fa-comment-o"></i>
                    </button>
                    <br>

                    <div class="detail">
                    <p>{{ $entry->likes }} Likes</p>
                    <p>
                    <b>{{ $entry->users->email }}</b> {{ $entry->caption }}
                    </p>
                    <hr>
                    @foreach($entry->komentar_post as $komentar)
                    <p>
                    <b>{{ $komentar->users->email }}</b> {{ $komentar->comment }}
                    </p>
                    @endforeach
                    </div>

                    <form action="/addcomment" method="post">
                    @csrf                    
                    <input type="text" name="fieldkomen" class="form-control" placeholder="Recipient's username"
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit" name="postcomment" value="{{ $entry->id }}">Post</button>
                    </div>
                    </form>

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                    {{ session('status')}}
                    </div>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
<style>
.card{
    margin-bottom:30px;
}
</style>