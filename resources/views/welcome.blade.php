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

                    <a href="{{ route('about') }}" >Sobre Nosotros</a> <br>
                    <a href="{{ route('notes.index') }}" >Notas</a>

                </h1>

            </div>
        </div>
    </body>
</html>
