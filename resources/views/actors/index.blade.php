@extends('layouts.default')

@section('main')
    <h1>Los Actores</h1>

    {{-- Creo el formulario para buscar por nombre o apellido a los actores, clase 3 ejercicio 4.a --}}
    <form class="form-inline" action="{{route('actors.search')}}" method="get">
        <input type="text" name="busqueda" value="{{ $_GET['busqueda']??'' }}" placeholder="Busqueda" class="form-control">
        <button type="submit" class="btn btn-primary"><span><i class="fas fa-search"></i>
        </span></button>

    </form>


    {{-- Recorro la Coleccion (array) de los actores --}}
    @foreach ($actores as $actor)
    <div>
        {{-- aqui puedo usar el método de modelo que me retorna e nombre completo --}}
        {{-- tambien llamo a la ruta actors.show como necesita el id, tengo enviarselo como segundo parametro, el cual es un array asociativo --}}
        {{-- clase 3 ejercicio 3.c--}}
        <a href="{{ route('actors.show', ['cosa'=>$actor->id]) }}">{{ $actor->getFullName() }}</a>
    </div>




    @endforeach
@endsection
