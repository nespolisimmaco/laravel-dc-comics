@extends('layouts.app')

@section('content')
    <h1>Home page</h1>
    <a href="{{ route('comics.index') }}" class="btn btn-primary my-3">Vai alla lista</a>
@endsection
