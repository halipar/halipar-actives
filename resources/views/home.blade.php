<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <section>
        <div class="title"></div>

        {{-- REGISTRATIONS START --}}
        <div class="registrations-container">

            <div class="register">
                <div class="register-title">
                    <h2>Cadastro de Produto</h2>
                </div>



                <form class="register-form" action="{{ Route('registrations') }}" method="post">
                    @csrf
                    <div class="code-input">
                        <label for="code">Código do Produto</label>
                        <input class="code" type="text" name="code" id="code" placeholder="Digite o código do produto" value="{{ old('code') }}" required>
                    </div>

                    <div class="description-input">
                        <label for="description">Descrição do Produto</label>
                        <textarea class="description" name="description" id="description"
                            placeholder="Digite a descrição do produto" resize="none"></textarea>
                    </div>

                    <button type="submit">Cadastrar</button>
                </form>


            </div>

            <div class="display"></div>

        </div>

        <div class="display"></div>
    </section>
</body>

</html>