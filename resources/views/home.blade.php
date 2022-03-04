{{-- exend del layout di default --}}
@extends('layouts.default')
{{-- sezione principale --}}
@section('content')
<main>
    <div class="card-container">
        @foreach ($data as $movie)
        <div class="card">
            <h1>{{$movie->id}}</h1>
            <h1>{{$movie->title}}</h1>
            <p>{{$movie->original_title}}</p>
            <p>{{$movie->date}}</p>
            <p>{{$movie->vote}}</p>
        </div>
        @endforeach
    </div>
</main>
@endsection