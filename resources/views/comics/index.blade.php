@extends("layouts.app")

@section('content')

<h1 class="text-center"> index </h1>
<div class="container mt-5 text-center">
    <a href="{{route("comics.create")}}"><button class="btn btn-info">Create</button></a>
</div>


@endsection

