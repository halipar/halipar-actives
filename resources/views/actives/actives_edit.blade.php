@extends('actives/master')


@section('content')
    <div class="edit-container">
        <h2>Cadastro de ativos</h2>

        <div class="register">





            <form class="edit-form" action="{{ Route('actives.update', ['active' => $active]) }}" method="post">
                @csrf
                {{-- aqui nesse @csrf ele declara um token que pode ser chamado pelo '_token', é padrão --}}
                <input type="hidden" name="_method" value="PUT">
                <div class="selectors-container">

                    <div class="fields">
                        <h5>Identi ficação do ativo: {{$active->id }}</h5>
                        <h5>Tipo do ativo: {{$active->typeActive->name }}</h5>
                        <h5>Código de patente: {{$active->code }}</h5>

                    </div>

                    <label for="sector_id">Escolha o Setor</label>

                    <select class="sector form-select form-select-lg mb-3" aria-label="Large select example" name="sector_id"
                        id="sector_id">

                        <option value="{{$active->sector->id}}" class="teste">{{ ucfirst($active->sector->name) }}</option>

                        @foreach ($sectors as $sector)
                            <option value="{{ $sector->id }}">
                                {{ ucfirst($sector->name) }}
                            </option>
                        @endforeach

                    </select>




                </div>

                <button class="btn btn-success" type="submit" >Salvar</button>

            </form>







        </div>


    </div>
@endsection
