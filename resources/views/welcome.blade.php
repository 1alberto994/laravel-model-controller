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

                            <div class="card">
                                <div class="card-body">
                                    

                                    <h1 class="card-title">{{$movie ->$title}}</h1>
                                    <h3class="card-title">{{$movie ->$original_title}}</h3>
                                    <p>{{$movie->$nationality}},{{$movie->$date}},{{$movie->$vote}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </main>

    </body>
</html>
