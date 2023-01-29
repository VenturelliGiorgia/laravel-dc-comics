 @extends("layouts.app")

 @section('content')
<h1>Nuovo Prodotto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
    @csrf 

    <div class="mb-3">
        <label class="form-label">Titolo</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input type="number" step=".01" class="form-control" name="price">
    </div>
    
    <button class="btn btn-info text-white">Salva prodotto</button>

</form>
@endsection




