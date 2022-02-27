@extends('layout')
@section('page_title')
    HomePage
    @endsection

@section('content')
<div class="content container">
    <h1>My Gallery</h1>
    <div class="col-md-6 gallery-add">
        <a class="btn btn-success" href="/add/photo">Add Photo</a>
    </div>
    <div class="photos">
        <div class="row">
        @foreach($images as $image)
        <div class="col-3">
            <img src="{{$image->image}}" class="img-thumbnail" alt="">
            <div class="buttons">
                <button type="button" class="btn btn-primary" onclick="window.location.href='/show/{{$image->id}}'">Show</button>
                <button type="button" class="btn btn-warning" onclick="window.location.href='/edit/{{$image->id}}'">Edit</button>
                <button type="button" class="btn btn-danger" onclick="alert('are you sure?');window.location.href='/delete/{{$image->id}}'">Delete</button>
            </div>
        </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
