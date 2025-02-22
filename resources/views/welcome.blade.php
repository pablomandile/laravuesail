<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel + Vue + Sail</title>

    </head>
    <body class="antialiased">
        <div>
            <div>
                <br><br><br>
                <h1>
                    <ul>
                        <li>
                            <a href="{{ route('about') }}" style="text-decoration: none;">Sobre Nosotros</a>
                        </li>
                        <li>
                            <a href="{{ route('notes.index') }}" style="text-decoration: none;">Notas (crud simple)</a>
                        </li>
                        <li>
                            <a href="{{ route('notes.index') }}" style="text-decoration: none;">Notas 2 (crud api)</a>
                        </li>
                    </ul>                    
                </h1>
            </div>
        </div>
    </body>
</html>
