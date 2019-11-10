@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form method="post" action="/editprofile/update" enctype="multipart/form-data">
            @csrf
            <h3>Edit Profile</h3>
            <br>
            <span>Title</span>
            <br>
            <input type="text" name="title" class="form-control" aria-describedby="button-addon2" value="{{ $data->title }}">
            <br>
            <span>Description</span>
            <br>
            <input type="text" name="desc" class="form-control" aria-describedby="button-addon2" value="{{ $data->description }}">
            <br>
            <span>URL</span>
            <input type="text" name="url" class="form-control" aria-describedby="button-addon2" value="{{ $data->url }}">
            <br>
            <span>Profile image</span>
            <br>
            <input type="file" name="postfile" aria-describedby="button-addon2">
            <br> <br>
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Save Profile</button>
        </div>
    </div>
</div>
@endsection
<style>
.card{
    margin-bottom:30px;
}
</style>