@extends('layouts.app')

@section('content')
    <a href="{{ route('notes.index') }}">Volver</a>

    <h1>
        {{ $note->title }}
    </h1>
    <h2>
        <p>{{ $note->description }}</p>
    </h2>
@endsection