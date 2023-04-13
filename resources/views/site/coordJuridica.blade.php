<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordenadoria Jurídica</title>
</head>
<body>
    <h1>Coordenadoria Jurídica</h1>
    <nav>
        <ul>
            <li><a href="{{ route ('site.coordJuridica.celApoioAdm')}}">Célula de Apoio Funcional e Sindicância Administrativa</a></li>
            <li><a href="{{ route ('site.coordJuridica.celContratos')}}">Célula de Contratos e Convênios</a></li>
            <li><a href="{{ route ('site.coordJuridica.celProcessos')}}">Célula de Processos Licitatórios</a></li>
            <li><a href="{{ route ('site.coordJuridica.celControle')}}">Célula de Controle Interno e Ouvidoria</a></li>
        </ul>
    </nav>
</body>
</html>