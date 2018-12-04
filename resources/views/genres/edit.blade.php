@extends('layouts.default')

@section('main')
    <h1>Editar Genero</h1>

    <form class="form" action="/genres/{{$genre->id}}/edit" method="post">
        @csrf
        <label for="" class="form-group">
            Nombre:
            <input class="form-control" type="text" name="name" value="{{ old('name', $genre->name) }}">
            {{--para mostrar el error del name--}}
            @if($errors->has('name'))
                <span class="help-block">
                    {{ $errors->first('name') }}
                </span>
            @endif
        </label>
        <div class="form-group">
            Status:
            <label for="activo" class="">
                <input type="radio" name="active" id="activo"
                 @if ($genre->active) checked @endif
                     value="1">Activo
            </label>
            <label for="inactivo" class="">
                <input type="radio" name="active" id="inactivo"
                @if (!$genre->active) checked @endif
                 value="0">Inactivo
            </label>
            @if($errors->has('active'))
                <span class="help-block">
                    {{ $errors->first('active') }}
                </span>
            @endif
        </div>


        <div class="">
            <button class="btn btn-success" type="submit">Guardar</button>
        </div>

    </form>





@endsection
