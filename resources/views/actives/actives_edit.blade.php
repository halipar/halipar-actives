@extends('master')

@section('content')

    <div class="edit-container">
        <h2>Cadastro de ativos</h2>

        <div class="register">





            <form class="register-form" action="{{ Route('actives.store') }}" method="post">
                @csrf
                {{-- aqui nesse @csrf ele declara um token que pode ser chamado pelo '_token', é padrão --}}



                <div class="selectors-container">
                    <label for="type_active_id">Escolha o Ativo</label>

                    <select class="type_active  form-select form-select-lg mb-3" aria-label="Large select example"
                        name="type_active_id" id="type_active_id">
                        <option value="" class="teste">Selecione...</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">
                                {{ ucfirst($type->name) }}
                            </option>
                        @endforeach
                    </select>

                    <label for="sector_id">Escolha o Setor</label>

                    <select class="sector form-select form-select-lg mb-3" aria-label="Large select example"
                        name="sector_id" id="sector_id">
                        <option value="" class="teste">Selecione...</option>
                        @foreach ($sectors as $sector)
                            <option value="{{ $sector->id }}">
                                {{ ucfirst($sector->name) }}
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
@endsection