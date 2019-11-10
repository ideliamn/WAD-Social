@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Add new post</h3>
            <br>
            <span>Post caption...</span>
            <br>
            <form method="post" action="/addpost/new" enctype="multipart/form-data">
            @csrf
            <input type="text" name="postcaption" class="form-control" aria-describedby="button-addon2">
            <br>
            <span>Post image...</span>
            <br>
            <input type="file" name="foto" aria-describedby="button-addon2">
            <br> <br>
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add new post!</button>
            </form>
        </div>
    </div>
</div>
@endsection
<style>
.card{
    margin-bottom:30px;
}
</style>