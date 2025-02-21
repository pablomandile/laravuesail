@extends('layouts.app')

@section('content')

    <h2>
        <a href="{{ route('notes.index') }}">Volver</a>
    </h2>
    <h3>
        <form method="post" action="{{ route('notes.update', ['note' => $note->id]) }}">
            @method('PUT')
            @csrf

            <label for="title">Título</label>
            <input id="title" type="text" name="title" value="{{ $note->title }}">
            @error('title')
                <p style="color:red">{{ $message }}</p>
            @enderror
            <br>
            <label for="desc">Descripción</label>
            <input type="text" name="description" id="desc" value="{{ $note->description }}">
            @error('desciption')
                <p style="color:red">{{ $message }}</p>
             @enderror
            <br>
            <input type="submit" value="Update" >
        </form>
    </h3>

@endsection