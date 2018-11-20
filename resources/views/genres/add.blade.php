@extends('layouts.default')

@section('main')
    <h1>Nuevo Genero</h1>
    <form class="" action="/genres/" method="post">
        @csrf
        <label for="" class="form-group">
            Nombre:
            <input class="form-control" type="text" name="nombre" value="">
        </label>
        <div class="">
            <button class="btn btn-success" type="submit">Guardar</button>
        </div>

    </form>
@endsection
