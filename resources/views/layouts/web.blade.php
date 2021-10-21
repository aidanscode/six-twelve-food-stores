<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }} - @yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
  </head>

  <body>
    @yield('content')

    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
