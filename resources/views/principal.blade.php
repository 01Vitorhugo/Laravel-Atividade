<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/principal.css')}}">
    <title>Home</title>
</head>
<body>
    <nav>
    <ul>
        <li><a href="{{ route ('site.coordInfantil')}}">Coodenadoria da Educação Infantil</a></li>
        <li><a href="{{ route ('site.coordEnsFun1')}}">Coodenadoria de Ensino Fundamental I</a></li>
        <li><a href="{{ route ('site.coordEnsFun2')}}">Coodenadoria de Ensino Fundamental II</a></li>
        <li><a href="{{ route ('site.coordDesenvolvimento')}}">Coordenadoria de Desenvolvimento da Aprendizagem e da Gestão Pedagógica</a></li>
        <li><a href="{{ route ('site.GestaoEsc')}}">Coordenadoria de Gestão Escolar</a></li>
        <li><a href="{{ route ('site.GestaoValor')}}">Coordenadoria de Gestão de Valorização de Pessoas</a></li>
        <li><a href="{{ route ('site.coordComunicacao')}}">Coordenadoria de Comunicação e Tecnologia da Informação</a></li>
        <li><a href="{{ route ('site.coordAdministrativa')}}">Coordenadoria Administrativa</a></li>
        <li><a href="{{ route ('site.coordJuridica')}}">Coordenadoria Jurídica</a></li>
        <li><a href="{{ route ('site.coordFinanceira')}}">Coordenadoria Financeira</a></li>
    </ul>
    </nav>
</body>
</html>