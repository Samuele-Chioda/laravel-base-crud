@extends('layouts.app')

@section('content')
    <h1>Pokemon List</h1>
    <ul>
        @foreach ($pokemons as $pokemon)
            <li>
                <a href="{{ route('pokemons.show', $pokemon->id) }}">{{ $pokemon->name }}</a> - {{ $pokemon->type }} - Level: {{ $pokemon->level }}
            </li>
        @endforeach
    </ul>
@endsection
