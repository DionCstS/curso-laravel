<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('index.conta') }}">Listar</a>
    <h2>Detalhes da Conta</h2>
    @if ( session('success') ) 
        {{ session('success') }}
    @endif

</body>
</html>