<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IES IMPIANTI ELETTRICI SCHIAVO</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <x-navbar/>
        
        {{$slot}}
    </body>
</html>