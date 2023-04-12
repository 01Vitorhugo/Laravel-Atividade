<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordenadoria de Gestão Escolar</title>
</head>
<body>
    <h1>Coordenadoria de Gestão Escolar</h1>
    <nav>
        <ul>
        <li><a href="{{ route('site.GestaoEsc.celPesquisa')}}">Célula de Pesquisa, Informação e Dados Educacionais</a></li>
        <li><a href="{{ route('site.GestaoEsc.celApoio')}}">Célula de Apoio à Gestão Escolar</a></li>
        <li><a href="{{ route('site.GestaoEsc.celSuperintendencia')}}">Célula de Superintendência Escolar</a></li>
        <li><a href="{{ route('site.GestaoEsc.celServicos')}}">Célula de Serviços Educacionais</a></li>
        </ul>
    </nav>
</body>
</html>