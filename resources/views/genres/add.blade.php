@extends('layouts.default')

@section('main')
    <h1>Nuevo Genero</h1>

    <form class="form" action="/genres/" method="post">
        @csrf
        <label for="" class="form-group">
            Nombre:
            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
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
                <input type="radio" name="active" id="activo" value="1">Activo
            </label>
            <label for="inactivo" class="">
                <input type="radio" name="active" id="inactivo" value="0">Inactivo
            </label>
            @if($errors->has('active'))
                <span class="help-block">
                    {{ $errors->first('active') }}
                </span>
            @endif
        </div>

        {{-- div para validaciones con checkboxes, no lo uso aqui por que no tengo esta info en la BD
        <div class="form-group">
            Público:
            <label for="p1" class="">
                <input type="checkbox" name="publico[]" id="p1" value="ninos">Niños
            </label>
            <label for="p2" class="">
                <input type="checkbox" name="publico[]" id="p2" value="12">+12 años
            </label>
            <label for="p3" class="">
                <input type="checkbox" name="publico[]" id="p3" value="16">+16 años
            </label>
            @if($errors->has('publico'))
                <span class="help-block">
                    {{ $errors->first('publico') }}
                </span>
            @endif
        </div>
        --}}

        <div class="">
            <button class="btn btn-success" type="submit">Guardar</button>
        </div>

    </form>





@endsection
