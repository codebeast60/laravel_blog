@extends('layouts.app')
@if(Auth::check())
@section('content')

<div class="container w-50 w-md-100">
    <h1>create new post</h1>
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">title</label>
            <input type="text" name="title" class="form-control w-md-50" id="exampleFormControlInput1"
                placeholder="title">

        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">description</label>
            <textarea name="description" class="form-control w-md-50" id="exampleFormControlTextarea1"
                rows="5"></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control w-md-25" name="image" type="file" id="formFile">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">submit</button>
        </div>
    </form>
</div>

@endsection
@else
@section('content')
<h1 class="text-center text-uppercase fw-bold ">you can't access this page directly Login first</h1>
@endsection
{{header("Refresh:4;url=/blog")}}

@endif