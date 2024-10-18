@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Laravel Model Controller
</h1>

<main>
    <ul>
        @foreach ($movies as $movie)
            <li>
                {{ $movie->title }}
            </li>
        @endforeach
    </ul>
</main>

@endsection
