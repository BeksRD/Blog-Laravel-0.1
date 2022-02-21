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
        <div class="col-md-3">
            <img src="/images/grid-item-image-8.jpg" class="img-thumbnail" alt="">
            <div class="buttons">
                <button type="button" class="btn btn-primary" onclick="window.location.href='/show'">Show</button>
                <button type="button" class="btn btn-warning" onclick="window.location.href='/edit'">Edit</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='/show'">Delete</button>
            </div>
        </div>
        <div class="col-md-3">
            <img src="/images/grid-item-image-8.jpg" class="img-thumbnail" alt="">
            <div class="buttons">
                <button type="button" class="btn btn-primary" onclick="window.location.href='/show'">Show</button>
                <button type="button" class="btn btn-warning" onclick="window.location.href='/edit'">Edit</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='/show'">Delete</button>
            </div>
        </div>
        <div class="col-md-3">
            <img src="/images/grid-item-image-8.jpg" class="img-thumbnail" alt="">
            <div class="buttons">
                <button type="button" class="btn btn-primary" onclick="window.location.href='/show'">Show</button>
                <button type="button" class="btn btn-warning" onclick="window.location.href='/edit'">Edit</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='/show'">Delete</button>
            </div>
        </div>
        <div class="col-md-3">
            <img src="/images/grid-item-image-8.jpg" class="img-thumbnail" alt="">
            <div class="buttons">
                <button type="button" class="btn btn-primary" onclick="window.location.href='/show'">Show</button>
                <button type="button" class="btn btn-warning" onclick="window.location.href='/edit'">Edit</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='/show'">Delete</button>
            </div>
        </div>
    </div>
</div>
@endsection
