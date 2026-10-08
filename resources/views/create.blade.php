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
    <section>


        {{-- REGISTRATIONS START --}}


        <div class="registrations-container">


            <div class="register">





                <form class="register-form" action="{{ Route('registrations') }}" method="post">
                    @csrf
                    {{-- aqui nesse @csrf ele declara um token que pode ser chamado pelo '_token', é padrão --}}



                    <div class="selectors-container">
                        <label for="type_active_id">Escolha o Ativo</label>

                        <select class="type_active  form-select form-select-lg mb-3" aria-label="Large select example"
                            name="type_active_id" id="type_active_id">
                            <option value="" class="teste">Selecione...</option>
                            @foreach ($types as $item)
                                <option value="{{ $item->id }}">
                                    {{ucfirst($item->type) }}
                                </option>
                            @endforeach
                        </select>

                        <label for="sector_id">Escolha o Setor</label>

                        <select class="sector form-select form-select-lg mb-3" aria-label="Large select example"
                            name="sector_id" id="sector_id">
                            <option value="" class="teste">Selecione...</option>
                            @foreach ($sectors as $sector)
                            <option value="{{$sector->id}}">
                                {{ucfirst($sector->name)}}
                            </option>
                            @endforeach
                            
                        </select>

                        <label for="code">Insira o codigo de patente</label>
                        <input type="text" name="code" id="code" class="code" maxlength="250">



                    </div>

                    <button id="btnRegis" type="submit">Cadastrar</button>

                </form>







            </div>


        </div>



    </section>

</body>



</html>
