@extends('layouts.app')

@section('content')
    <h2>
        <a href="{{ route('notes.index') }}">Volver</a>
    </h2>
    <h1>
        <form method="post" action="{{ route('notes.store') }}">
        @csrf
            <label for="title">Título</label>
            <input id="title" type="text" name="title">
            @error('title')
                <p style="color:red">{{ $message }}</p>
            @enderror
            <br>
            <label for="desc">Descripción</label>
            <input type="text" name="description" id="desc">
            @error('description')
                <p style="color:red">{{ $message }}</p>
            @enderror
            <br>
            <input type="submit" value="Create" >
        </form>
    </h1>
        
@endsection