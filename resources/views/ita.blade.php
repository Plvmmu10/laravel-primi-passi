<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Italian</title>
</head>

<body>
    <h1>
        {{ $title }}
    </h1>

    <button><a href="{{ '/' }}">Homepage</a></button>
</body>

</html>

<style>
    body {
        text-align: center;
    }
</style>
