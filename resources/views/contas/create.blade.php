<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('index.conta') }}">Listar</a>
    <h2>Criar conta</h2>

    <form action="{{ route('store.conta') }}" method="POST">
        @csrf
        
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome" required><br><br>

        <label for="">Valor</label>
        <input type="text" name="valor" id="valor" placeholder="Digite o valor com '.'" required><br><br>

        <label for="">Vencimento</label>
        <input type="date" name="vencimento" id="vencimento" required><br><br>

        <button type="submit">Cadastrar</button>


    </form>
</body>
</html>
