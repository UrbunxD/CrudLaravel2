<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar usuarios</title>

    <style>
        table,td,th {
            border: 1px solid;
            padding: 20px;
            border-collapse: collapse;
        }


    </style>
</head>

<body>

    <center>
        <h1>Listar Úsuarios</h1>
        <h4>Lista de Úsuarios Cadastrados</h4>
<br><br>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dados do banco -->
                @foreach ($pessoas as $p)
                <tr>
                    <td>{{$p->nome}}</td>
                    <td>{{$p->idade}}</td>
                    <td><button><a href="/editar/{{$p->id}}">Editar</a></button></td>
                    <td><button><a href="/excluir/{{$p->id}}">Excluir</a></button</td>
                </tr>
                @endforeach
            </tbody>
        </table>

<br><br>
        <a href="/">Voltar</a>
    </center>
</body>

</html>