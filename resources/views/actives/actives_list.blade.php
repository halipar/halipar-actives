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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($actives as $active)
                    <tr>
                        <th scope="row">{{ $active->id }}</th>
                        <td>{{ $active->sector->name }}</td>
                        <td>{{ $active->typeActive->name }}</td>
                        <td>{{ $active->code }}</td>
                    </tr>
                    @endforeach
                
                </tbody>
            </table>

        </div>

    </div>
@endsection
