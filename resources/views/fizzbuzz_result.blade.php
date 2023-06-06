<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ejercicio FizzBuzz </title>

    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
</head>

<body>
    <div class="container">
        <div class="block mt-4 mb-3">
            <a href="{{route('index')}}" class="button is-primary" role="button">Volver</a>
        </div>
        <div class="columns">
            <div class="column">
                <h1 class="title is-2 has-text-centered">Resultado de la serie de FizzBuzz</h1>
                <h2 class="title is-4 has-text-centered">desde 1 hasta {{ $maximo }}</h2>
                <div class="columns has-text-centered">
                    <div class="column is-two-fifth ">
                        <span class="is-size-4">Serie Original</span>
                        <ul>
                            @foreach ($numeros as $numero)
                                <li class="has-text-link-dark">{{ $numero }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="column is-two-fifth ">
                        <span class="is-size-4">Serie FizzBuzz</span>
                        <ul>
                            @foreach ($listado as $fzbz)
                                <li class="has-text-danger-dark">{{ $fzbz }}</li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </div>
</body>

</html>
