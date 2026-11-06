@extends('actives/master')


@section('content')
    <div class="list-container">

        <div class="list">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Setor</th>
                        <th scope="col">Tipo de ativo</th>
                        <th scope="col">Codigo de Patente</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($actives as $active)
                    <tr>
                        <th scope="row" id="active-id">{{ $active->id }}</th>
                        <td>{{ $active->sector->name }}</td>
                        <td>{{ $active->typeActive->name }}</td>
                        <td>{{ $active->code }}</td>
                        <td><button type="button" class="btn btn-danger" data-id="{{$active->id}}" data-url="{{ route('actives.destroy', $active->id) }}">Excluir</button></td>
                        <td><button type="button" class="btn btn-warning" data-id="{{$active->id}}">Editar</button></td>
                    </tr>
                    @endforeach
                
                </tbody>
            </table>

        </div>

    </div>
@endsection


