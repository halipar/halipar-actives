<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Castro de Ativos</title>
</head>

<body>
    
    <div class="master-container">
        
        <div class="nav-bar">
            <a class="nav-link" href="{{ route('actives.create') }}">Cadastrar</a>
            <a class="nav-link" href="{{ route('actives.index') }}">Listagem</a>
        </div>
        <div class="content-container">
            @yield('content')
        </div>

    </div>
</body>



</html>
