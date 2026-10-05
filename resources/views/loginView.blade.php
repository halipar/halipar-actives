<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Castro de Ativos</title>
</head>

<body>
    <div class="login-view">

        <div class="login-container">

            <div class="login-title">
                <h3>Acesse seu painel</h3>
                <p>Acesse e gerencie sua loja</p>
            </div>

            <login-form-container>
                <form action="submit" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">

                    <label for="senha">Senha</label>
                    <input type="senha" name="sena" id="senha">

                    <button type="submit">Entrar</button>
                </form>
            </login-form-container>

        </div>

    </div>
</body>



</html>
