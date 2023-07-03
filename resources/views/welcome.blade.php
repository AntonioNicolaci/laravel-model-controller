<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        @vite('resources/scss/app.scss')
    </head>
    <body>
        <div id="ms_divCard">
            @foreach($movies as $movie)
                <ul class="ms_card">
                    <li>
                        <span class="ms_category">Titolo: </span>
                        <span class="ms_db">{{$movie->title}}</span>
                    </li>
                    <li>
                        <span class="ms_category">Titolo Originale: </span>
                        <span class="ms_db">{{$movie->original_title}}</span>
                    </li>
                    <li>
                        <span class="ms_category">Nazione del film: </span>
                        <span class="ms_db">{{$movie->nationality}}</span>
                    </li>
                    <li>
                        <span class="ms_category">Data di uscita: </span>
                        <span class="ms_db">{{$movie->date}}</span>
                    </li>
                    <li>
                        <span class="ms_category">Voto: </span>
                        <span class="ms_db">{{$movie->vote}}</span>
                    </li>
                </ul>
            @endforeach
        </div>
    </body>
</html>
