<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cars Databes</title>



        <!-- Styles -->

        <link rel="stylesheet" href="{{mix('css/app.css')}}">

    </head>
    <body>

      @include('inc.header')
      </div>
        <div class="container">
          @yield('content')
          @yield('options')
        </div>
    </body>
</html>
