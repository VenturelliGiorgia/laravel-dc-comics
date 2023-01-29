@extends('layouts.app')

@section('content')
<h1>Modifica prodotto {{ $comic->id }}</h1>

<form action="{{ route('comics.update', $comic->id) }}" method="POST">
    @csrf
    @method('put')

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" class="form-control" name="name" value="{{ $comic->title }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" cols="30" rows="5" class="form-control">{{ $comic->description }}</textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input type="number" step=".01" class="form-control" name="price" value="{{ $comic->price }}">
    </div>
    <button class="btn btn-info text-white" type="submit">Salva prodotto</button>
</form>
@endsection
