@extends('layouts.app')

@section('content')
    <h1>{{ $pokemon->name }}</h1>
    <p>Type: {{ $pokemon->type }}</p>
    <p>Level: {{ $pokemon->level }}</p>
    <img src="{{ $pokemon->image }}" alt="{{ $pokemon->name }}">
    <a href="{{ route('pokemons.index') }}">Back to list</a>
@endsection
