@extends('layouts.app')

@section('content')
<div class="my-5">
    <div class="text-center my-5">
        <h1 class="text-primary">{{ $comic->title }}</h1>
    </div>
    <div class="row align-items-center">
        <div class="col-auto">
            <div>
                <img src="{{ $comic->thumb }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col">
            <ul class="list-group list-flush">
                <li class="list-group-item">
                    <span class="fw-bold">Series: </span>
                    <span> {{ $comic->series }}</span>
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Description:</span>
                    <span>{{ $comic->description }}</span>
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Type: </span>
                    <span>{{ $comic->type }}</span>
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Price: </span>
                    <span>€ {{ $comic->price }}</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="text-center mt-5">
        <a href="{{route("comics.index")}}"><button class="btn btn-info text-white">Index</button></a>
    </div>
</div>
@endsection
