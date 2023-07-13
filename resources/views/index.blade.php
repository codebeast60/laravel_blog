@extends('layouts.app')

@section('content')
@if(session()->has('message'))
<div class="alert alert-success text-center" role="alert">
    {{session()->get('message')}}
</div>
@endif
{{-- hero  --}}
<div class="hero hero-bg-image d-flex flex-column align-items-center w-100 ">
    <h3 class="text-center text-light">welcome into my blog</h3>
    <a class="bg-secondary text-light text-decoration-none p-2 rounded" href="/"> Start reading</a>
</div>
{{-- end hero  --}}
<div class="container mb-4 mt-3">
    <div class="row">
        @foreach($blogs as $blog)
        <div class="col-md-6 p-2">
            <div class="w-75 mw-50">
                <img style="height:200px;width:400px" class="img-fluid mb-3" src="/images/{{$blog->image_path}}" alt="">
            </div>

            <div>
                <h2 class="h1 w-75">{{$blog->title}}</h2>
                <p class="fw-bold">
                    {{$blog->slug}}
                </p>
                <p class="lead text-limit pe-4"> {{$blog->description}} </p>

                {{-- <a href="/" class="rounded text-light p-2 text-decoration-none bg-secondary link-danger">read
                    more...</a> --}}
            </div>
        </div>
        @endforeach
    </div>
</div>



<div class="bg-secondary w-100 ">

    <div class="container mx-auto pt-2 d-flex justify-content-around text-white">
        <span class="fw-bold py-2 h3">UX design</span>
        <span class="fw-bold py-2 h3">Programming </span>
        <span class="fw-bold py-2 h3">Graphic design </span>
        <span class="fw-bold py-2 h3">Front-end</span>
    </div>
</div>

{{-- recent post  --}}
<h2 class="fw-bold py-4 h2 text-center">Recent posts</h2>
<div class="container d-flex justify-content-center my-auto">
    <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nostrum aperiam
        quasi
        assumenda recusandae eos
        consequuntur iusto obcaecati rerum quod sapiente ea quaerat quibusdam tenetur cum, voluptatibus, doloremque, ad
        sint? Optio consectetur, voluptas alias, esse quaerat quasi totam dolorum, iure quisquam nam incidunt sint dolor
        molestiae molestias maiores odit laborum!</p>
</div>
@endsection