 @extends("layouts.app")

 @section('content')
<h1 class="text-center mb-5">Nuovo Prodotto</h1>

    <form action="{{ route('comics.store') }}" method="POST">
    @csrf 

    <div class="row g-3 justify-content-center">
        <div class=" col-4">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class=" col-4">
            <label class="form-label">Immagine</label>
            <input type="text" class="form-control" name="thumb">
        </div>
        <div class="col-4">
            <label class="form-label">Descrizione</label>
            <textarea name="description" cols="30" rows="3" class="form-control"></textarea>
        </div>
        <div class="col-4">
            <label class="form-label">Prezzo</label>
            <input type="number" step=".01" class="form-control" name="price">
        </div>
        <div class="col-4">
            <label class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type">
        </div>

        <div class="col-4">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control" name="series">

        </div>
        <div class="col-4">
            <label class="form-label">Data di vendita</label>
            <input type="text" class="form-control" name="sale_date">
        </div>
    </div>
    <div class="text-center mt-5">
    <button class="btn btn-info text-white">Salva prodotto</button>
    </div>
</form>
@endsection




