@extends('layouts.app')

@section('main-content')
<section id="film-controller">
    @foreach ($movies as $film)
        <article>
            <h1>{{ $film->title }}</h1>
            <p>
                Original name: {{ $film->original_title }}<br>
                Nationality: {{ $film->nationality }}<br>
                Date: {{ $film->date }}<br>
                Vote: {{ $film->vote }}
            </p>
        </article>
    @endforeach
</section>

@endsection
