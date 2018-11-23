@extends('layouts.default')

@section('main')

<div class="row">
    <div class="col-sm-6">
        <div class="card" style="">
          <div class="card-body">
            <h5 class="card-title">{{ $actor->getFullName() }}</h5>
            <p class="card-text">Rating: {{$actor->rating}}</p>
            <p class="card-text">Pelicula Favorita:
                <a href="/movies/{{$actor->favoriteMovie->id}}">{{$actor->favoriteMovie->title}}</a></p>

            <h3>Actua en</h3>

            @foreach ($actor->movies as $movie)
                {{$movie->title}}<br>
            @endforeach

          </div>
        </div>
    </div>
</div>

@endsection
