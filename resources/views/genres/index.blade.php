@extends('layouts.default')

@section('main')
    <h1>Listado de Generos</h1>
    <a href="/genres/new" class="btn btn-primary">Nuevo Genero</a>

    <ul>
    @foreach ($genres as $genre)
        <li>  <a href="/genres/{{$genre->id}}">{{$genre->name}}</a> </li>
    @endforeach
    </ul>
@endsection
