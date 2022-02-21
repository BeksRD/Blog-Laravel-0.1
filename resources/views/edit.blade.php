@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 edit-section">
                <h1>Edit Image</h1>
                <img src="/images/grid-item-image-8.jpg" class="img img-thumbnail" alt="">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-control">
                        <input type="file">
                    </div>
                    <button type="submit" class="btn btn-warning">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
