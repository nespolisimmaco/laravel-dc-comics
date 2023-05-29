@extends('layouts.app')

@section('content')
    <h1 class="text-center">Fumetto</h1>
    <div class="container">
        <h2>{{ $comic['title'] }}</h2>
        <img class="my-3" src="{{ $comic['image'] }}" alt="{{ $comic['title'] }}">

        <ul class="list-group">
            <li class="list-group-item">
                <p>
                    <strong>Descrizione: </strong> {{ $comic['description'] }}
                </p>
            </li>
            <li class="list-group-item">
                <div>
                    <strong>Prezzo: </strong> {{ $comic['price'] }}
                </div>
            </li>
            <li class="list-group-item">
                <div>
                    <strong>Serie: </strong> {{ $comic['series'] }}
                </div>
            </li>
            <li class="list-group-item">
                <div>
                    <strong>Tipo: </strong> {{ $comic['type'] }}
                </div>
            </li>
            <li class="list-group-item">
                <div>
                    <strong>Data di vendita: </strong> {{ $comic['sale_date'] }}
                </div>
            </li>
        </ul>
    </div>
@endsection
