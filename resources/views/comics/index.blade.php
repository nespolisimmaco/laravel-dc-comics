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
                    <th scope="col">Azioni</th>
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
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.show', $comic['id']) }}">
                                <i class="fa-solid fa-circle-info"></i>
                            </a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', $comic['id']) }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form class="d-inline-block" action="{{ route('comics.destroy', $comic['id']) }}"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="confirmation()" type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    @push('other-scripts')
        <script>
            function confirmation() {
                confirm("Sei sicuro di voler eliminare?");
            }
        </script>
    @endpush
@endsection
