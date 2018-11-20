@extends('layouts.default')

@section('main')
    <h1>Listado de Pelis</h1>

    <ul>
    @foreach ($peliculas as $peli)
        <li><img width="30px;" src="/{{$peli['poster']}}">
        <a href="/peliculas/buscar/{{$peli['title']}}">{{$peli['title']}}</a> - {{$peli['genre']}}</li>
    @endforeach
    </ul>
@endsection
