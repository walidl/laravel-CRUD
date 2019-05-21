<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pagamenti</title>



        <!-- Styles -->

        <link rel="stylesheet" href="{{mix('css/app.css')}}">

    </head>
    <body>

        <h1>Cars DB</h1>
        <div class="container">
          @yield('content')
          @yield('options')
        </div>
    </body>
</html>
