@extends('layout.master')

@section('title','Category Create')


@section('content')
    <div class="container my-5">
        <h1 class="text-primary text-center">Create Category</h1>
        <div class="col-md-8 offset-md-2">
            {{--Form Start--}}
            <form action="/E-commerce/public/admin/category/create" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">File</label>
                    <input type="file" class="form-control" id="file" name="file">
                </div>
                <div class="row justify-content-end no-gutters">
                    <button type="submit" class="btn btn-primary btn-sm">Create</button>
                </div>
            </form>
            {{--Form End--}}
        </div>
    </div>
@endsection