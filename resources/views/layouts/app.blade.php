<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', env('APP_NAME'))</title>

    @vite([
    'resources/sass/main.sass',
    'resources/css/app.css',
    'resources/js/app.js'
    ])

</head>

<body class="antialiased">
</body>

</html>
