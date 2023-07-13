@extends('layouts.app')
@section('content')
@if(session()->has('message'))
<div class="alert alert-danger text-center" role="alert">
    {{session()->get('message')}}
</div>
@endif

<div class="containter">
    <h1 class="text-center fw-bold pt-2 pb-2">All Posts</h1>
</div>

@if(Auth::check())
{{-- {{  auth()->user()->email;}} --}}
<div class="container mb-4">
    <a href="/blog/create" class="rounded fw-bold text-light p-2 text-decoration-none bg-primary link-danger">New
        post</a>
</div>
@endif

@foreach ($posts as $post)

<div class="row mb-4">

    <div class="col-md-5">
        <div class="container ">
            <img class="img-fluid ms-md-5 ms-lg-5" src="/images/{{$post['image_path']}}" alt="">
        </div>
    </div>
    <div class="col-md-5">
        <div class="container mt-5 ms-2">
            <h2 class="fw-bold text-muted">{{$post->title}}</h2>
            <span class="text-muted">by: {{$post->user->name}}</span><br>
            {{-- <span class="text-muted">last update: {{$post->updated_at}}</span> --}}
            <span class="text-muted">last update: {{date('d-m-Y', strtotime($post->updated_at))}}</span>
            <p class="lead text-limit">
                {{$post['description']}}
            </p>
            <a href="/blog/{{$post->slug}}"
                class="rounded fw-bold text-light p-2 text-decoration-none bg-secondary link-danger">Read More...</a>
        </div>
    </div>
</div>

<hr class="w-75 ms-5">
@endforeach


@endsection