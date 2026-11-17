@extends('./actives/master')
@section('content')
    <div class="sys-container">
        <div class="sys-title">
            <h2 class="title">SysCatalogue</h2>
        </div>
        <form action="" method="GET" class="form-search">
            <label for="search" class="search">Insira o IP da máquina:</label>
            <input type="search" name="search" class="search input-search">
            <button type="submit" class="btn btn-success btn-search">Procurar</button>
        </form>
        <div class="machines">

            <div class="list">
                <table class="table pcs-table table-striped table-light">
                    <thead>
                        <tr>
                            <th scope="col">IP da máquina:</th>
                            <th scope="col">Grupo</th>
                            <th scope="col">Memória total</th>
                            <th scope="col">Memória disponível</th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pcs as $pc)
                            <tr>
                                <th scope="row">{{ $pc->ip_address }}</th>
                                <td>{{ $pc->group->name }}GB</td>
                                <td>{{ $pc->total_gb }}GB</td>
                                <td>{{ $pc->available_gb }}</td>

                                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalCenter" data-id="{{ $pc->ip }}">
                                        Mostrar mais
                                    </button></td>

                                
                            </tr>
                        @endforeach


                        <!-- Button trigger modal -->


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                        <!-- Correção: Usando btn-close padrão do Bootstrap 5 -->
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <!-- Correção: data-bs-dismiss em vez de data-dismiss -->
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

            </div>
        </div>
    @endsection
