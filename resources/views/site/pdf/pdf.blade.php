<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relatório</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #701a75;
            color: rgb(0, 0, 0);
        }
        h1 {
            text-align: center;
            color: #ffffff;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        div {
            margin-bottom: 20px;
            padding: 15px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        div p {
            margin: 8px 0;
        }
        strong {
            color: #701a75;
        }
    </style>
</head>
<body>
    <h1>Relatório de Artistas</h1>
   
    @foreach($data as $reg)
    <div>
        <p><strong>Nome:</strong> {{$reg->nome}}</p>
        <p><strong>Data de Nascimento:</strong> {{$reg->dt_nascimento}}</p>
        <p><strong>Nacionalidade:</strong> {{$reg->nacionalidade}}</p>
        <p><strong>E-mail:</strong> {{$reg->email}}</p>
        <p><strong>Status:</strong> {{ $reg->status == 1 ? 'Ativo' : 'Inativo' }}</p>
        <p><strong>Endereço:</strong> {{$reg->endereco}}</p>
        <p><strong>Telefone:</strong> {{$reg->telefone}}</p>
    </div>
    @endforeach
        
</body>
</html>
