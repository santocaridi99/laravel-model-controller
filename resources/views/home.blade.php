{{-- exend del layout di default --}}
@extends('layouts.default')
{{-- sezione principale --}}
@section('content')
<div class="card-container">
    @foreach ($data as $movie)
    <div class="card">
        <h6>{{$movie->id}}</h6>
        <h4>{{$movie->title}}</h4>
        <p>Titolo originale:{{$movie->original_title}}</p>
        <p>Data{{$movie->date}}</p>
        <p>Voti:{{$movie->vote}}</p>
    </div>
    @endforeach
</div>

@endsection