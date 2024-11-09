<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job board</title>
        @vite('resources/css/app.css')
    </head>
    <body class="mx-auto mt-10 max-w-2xl text-slate-700 bg-slate-200">
        {{ $slot }}
    </body>
</html>
