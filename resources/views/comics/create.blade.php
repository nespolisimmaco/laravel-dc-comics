@extends('layouts.app')

@section('content')
    <h1 class="text-center">Crea un nuovo fumetto</h1>
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type">Tipo</label>
                <select class="form-select" id="type" name="type">
                    <option value="comic-cook">Comic book</option>
                    <option value="graphic-novel">Graphic novel</option>
                </select>
            </div>
            <button class="btn btn-success my-2" type="submit">Invia</button>
        </form>
    </div>
@endsection