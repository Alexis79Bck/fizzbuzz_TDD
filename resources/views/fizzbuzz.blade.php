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
        <div class="columns">
            <div class="column">
                <h1 class="title is-2 has-text-centered">Ejercicio FizzBuzz</h1>
                <div class="content">
                    <p>La famosa serie FizzBuzz para un número natural es una sucesión desde <strong>1</strong> hasta
                        <strong>N</strong>
                        donde:
                    </p>
                    <ul>
                        <li>Los números que sean múltiplos de 3 se cambian por Fizz.</li>
                        <li>Los números que sean múltiplos de 5 se cambian por Buzz.</li>
                        <li> Los números que sean múltiplos de 3 y 5 se cambian por FizzBuzz.</li>
                    </ul>
                    <p>E imprima la serie <strong class="subtitle">FizzBuzz</strong> resultante.</p>
                </div>
            </div>
        </div>
        <form class="container" action="{{route('result')}}" method="post">
            @csrf
            
            <div class="columns">
                <div class="column is-one-fifth">
                    <div class="field">
                        <label class="label">Numero Máximo de Elementos (Default = 3)</label>
                    </div>
                    <div class="field has-addons">
                        <div class="control">
                            <input class="input" type="number" name="maximo" min="3" value="3">
                        </div>
                        <div class="control">
                            <button class="button is-info" type="submit">
                                Iniciar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
