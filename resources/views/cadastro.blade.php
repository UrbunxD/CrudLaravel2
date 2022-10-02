<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar usuarios</title>
</head>

<body>

    <center>
        <h1>Cadastro de Úsuario</h1>
        <h4>Cadastre um novo úsuario</h4>

        {{ session() -> get('xyz')}}
        <form action="/inserir-pessoas" method="post">
            @csrf
            <label for="txtNome">Nome:</label>
            <input type="text" name="nome" id="txtnome" placeholder="Digite Seu Nome">
<br><br>
            <label for="txtidade">Idade:</label>
            <input type="text" name="idade" id="txtIdade" placeholder="Digite sua idade">
<br><br>
            <button type="submit">Cadastrar</button>
        </form>
<br><br>
        <a href="/">Voltar</a>
    </center>
</body>

</html>