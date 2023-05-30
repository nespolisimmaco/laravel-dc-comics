@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>DC Comics</h1>
        <div class="my-2 text-end">
            <a class="btn btn-secondary" href="{{ route('comics.create') }}">Crea un nuovo fumetto</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Vedi dettagli</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic['id'] }}</th>
                        <td>{{ $comic['title'] }}</td>
                        <td>{{ $comic['price'] }}</td>
                        <td>{{ $comic['series'] }}</td>
                        <td>{{ $comic['type'] }}</td>
                        <td class="text-center">
                            <a class="btn btn-primary" href="{{ route('comics.show', $comic['id']) }}">
                                <i class="fa-solid fa-circle-info"></i>
                            </a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', $comic['id']) }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
