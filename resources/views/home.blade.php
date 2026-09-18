<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Castro de Ativos</title>
</head>

<body>
    <section>


        {{-- REGISTRATIONS START --}}


        <div class="registrations-container">


            <div class="register">





                <form class="register-form" action="{{ Route('registrations') }}" method="post">
                    @csrf



                    <div class="selectors-container">
                        <label for="name">Escolha o Ativo</label>

                        <select class="name form-select form-select-lg mb-3" aria-label="Large select example"
                            name="name" id="name"   >
                            <option value="">Selecione...</option>
                            <option value="impessora">Impessora</option>
                            <option value="monitor">Monitor</option>
                            <option value="tablet">Tablet</option>
                        </select>

                        <label for="sector">Escolha o Ativo</label>

                        <select class="sector form-select form-select-lg mb-3" aria-label="Large select example"
                            name="sector" id="sector" >
                            <option value="">Selecione...</option>
                            <option value="cozinha">Cozinha</option>
                            <option value="bar">Bar</option>
                            <option value="salao">Salão</option>
                        </select>



                    </div>

                    <div class="description-input">
                        <label for="description">Descrição</label>
                        <textarea class="description" name="description" id="description"
                            placeholder="Digite a descrição do produto" resize="none" ></textarea>
                    </div>

                    <button type="submit">Cadastrar</button>

                </form>




                


            </div>


        </div>



    </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>


</html>