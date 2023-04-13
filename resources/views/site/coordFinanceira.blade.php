<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordenadoria Financeira</title>
</head>
<body>
    <h1>Coordenadoria Financeira</h1>
    <nav>
        <ul>
            <li><a href="{{ route('site.coordFinanceira.celContabilidade')}}">Célula de Contabilidade</a></li>
            <li><a href="{{ route('site.coordFinanceira.celContas')}}">Célula de Prestação de Contas</a></li>
            <li><a href="{{ route('site.coordFinanceira.celPlanejamento')}}">Células de Planejamento Administrativo e Orçamentário</a></li>
        </ul>
    </nav>
</body>
</html>