<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 9 + Bootstrap Template</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>

        <main>
            @foreach($movies as $movie)
                <div class="container">
                    <div class="row">
                        <div class="col text-center">

                            <div class="card ">
                                <div class="card-body">
                                    

                                    <h1 class="card-title"> Titolo film:{{$movie ->title}}</h1>
                                    <h5 class="card-title">Titolo originale:{{$movie ->original_title}}</h5>
                                    <p>Nazionalità: {{$movie->nationality}}</p>
                                    <p>Data di uscita: {{$movie->date}}</p>
                                    <p>Votofilm: {{$movie->vote}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </main>

    </body>
</html>
