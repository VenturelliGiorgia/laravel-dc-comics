@extends("layouts.app")

@section('content')
<div class="d-flex justify-content-between mt-3">

<h1> Lista fumetti</h1>
    <a href="{{ route('comics.create') }}"><button class="btn btn-info text-white"> Aggiungi</button></a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>Prezzo</th>
            <th>Tipo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <td>{{$comic->title }}</td>
            <td>{{ Str::limit($comic->description, 50) }}</td>
            <td>€ {{ $comic->price }}</td>
             <td>{{ $comic->type }}</td>
            <td>
                <a href="{{ route('comics.show', $comic->id) }}" >
                    <button class="btn btn-info text-white">show</button>
                </a>
            </td>
            <td>
                <a href="{{ route('comics.edit', $comic->id) }}">
                    <button class="btn btn-info text-white">edit</button>
                </a>
            </td>
            <td>    
                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete-form d-inline-block">
                    @csrf()
                    @method('delete')
                    <button class="btn btn-danger">delate</button>
                </form>
            </td>
        </tr>
        @endforeach  
    </tbody>
</table>


@endsection

