@extends('layouts.app')

@section('content')
    <h1 class="text-center">Modifica un fumetto</h1>
    <div class="container">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic['title'] }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description">{{ $comic['description'] }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $comic['image'] }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic['price'] }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic['series'] }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di vendita</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date"
                    value="{{ $comic['sale_date'] }}">
            </div>
            <div class="mb-3">
                <label for="type">Tipo</label>
                <select class="form-select" id="type" name="type">
                    <option @selected($comic['type'] === 'comic book') value="comic-book">Comic book</option>
                    <option @selected($comic['type'] === 'graphic novel') value="graphic-novel">Graphic novel</option>
                </select>
            </div>
            <button class="btn btn-success my-2" type="submit">Invia</button>
            <a href="{{ route('comics.index') }}" class="btn btn-primary my-3 d-inline-block">Torna alla lista</a>
        </form>
    </div>
@endsection
