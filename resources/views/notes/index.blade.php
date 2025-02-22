@extends('layouts.app')

@section('content')

<ul>
    <h2>
        <a href="{{ route('inicio') }}">Inicio</a>
    </h2>
    <h2>
        <a href="{{ route('notes.create') }}">Crear Nota</a>
    </h2>

    <h3>
        @forelse ($notes as $note)
        <li>
            <a href="{{ route('notes.show', ['note' => $note->id]) }}">{{ $note->title }}</a>
            <a href="{{ route('notes.edit', ['note' => $note->id]) }}">| Editar |</a>
            <form method="post" action="{{ route('notes.destroy', ['note' => $note->id]) }}">
                @method('DELETE')
                @csrf

                <input type="submit" value="borrar">
            </form>
        </li>
        @empty
        <p>No hay notas.</p>        
            
        @endforelse
    </h3>
</ul>
    
@endsection