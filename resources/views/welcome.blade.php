<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


            {{-- <title>API Postcodes</title> --}}
        <!-- Styles -->

        @vite(['resources/js/app.js','resources/css/app.css'])
        <style>

        </style>
    </head>
    <body class="bg-light">
        @yield('content')
    </body>
</html>
