<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <h1>Projeto Laravel</h1>
        <a href="{{ route('index.conta') }}">Listar as contas</a><br>
        <a href="{{ route('create.conta')}}">Criar</a>
    </body>
</html>
