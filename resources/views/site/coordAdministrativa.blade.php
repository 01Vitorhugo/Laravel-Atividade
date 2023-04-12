<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordenadoria Administrativa</title>
</head>
<body>
    <h1>Coordenadoria Administrativa</h1>
    <nav>
        <ul>
            <li><a href="{{ route('site.coordAdministrativa.celLogistica')}}">Célula de Logística</a></li>
            <li><a href="{{ route('site.coordAdministrativa.celTransporte')}}">Célula de Transporte Escolar</a></li>
            <li><a href="{{ route('site.coordAdministrativa.celAlimentacao')}}">Célula de Alimentação Escolar</a></li>
            <li><a href="{{ route('site.coordAdministrativa.celObras')}}">Célula de Obras, Conservação e Manutenção Predial</a></li>
        </ul>
    </nav>
</body>
</html>