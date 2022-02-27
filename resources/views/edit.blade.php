@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 edit-section">
                <h1>Edit Image</h1>
                <img src="/{{$image->image}}" class="img img-thumbnail" alt="">
                <form action="/store/update/{{$image->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-control">
                        <input type="file" name="image">
                    </div>
                    <button type="submit" class="btn btn-warning">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
