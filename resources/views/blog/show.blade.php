@extends('layouts.app')

@section('content')
@if(session()->has('message'))
<div class="alert alert-success text-center" role="alert">
    {{session()->get('message')}}
</div>
@endif

<div class="container">
    <h1 class="text-center">{{$post->title}}</h1>
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
                <span class="text-muted">last update: {{date('d-m-Y', strtotime($post->updated_at))}}</span>
                <p class="lead">
                    {{$post['description']}}
                </p>

            </div>
        </div>
    </div>
    <div class="d-flex">

        {{-- @if(Auth::check() && auth()->user()->email = $post->user->id) --}}
        @if(Auth::user() && Auth::user()->id == $post->user->id )

        <a href="/blog/{{$post->slug}}/edit"
            class="rounded fw-bold text-light p-2 me-3 text-decoration-none bg-success link-danger">Edit POST</a>

        <form method="POST" action="/blog/{{$post->slug}}">
            @csrf
            @method('delete')
            <button type="submit" class="rounded fw-bold text-light p-2 text-decoration-none bg-danger border-0 ">Delete
                POST</button>
        </form>

        @endif
    </div>



</div>


@endsection