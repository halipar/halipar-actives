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
                                        data-bs-target=".sys-modal" data-admin-server="{{ $pc->admin_server }}"
                                        data-group="{{ $pc->group->name }}" data-device-name="{{ $pc->device_name }}"
                                        data-inventory-status="{{ $pc->inventory_status }}"
                                        data-motherboard="{{ $pc->motherboard }}" data-cpu="{{ $pc->cpu }}"
                                        data-memory-mb="{{ $pc->memory_mb }}"
                                        data-storage-details="{{ $pc->storage_details }}"
                                        data-total-gb="{{ $pc->total_gb }}" data-available-gb="{{ $pc->available_gb }}"
                                        data-video-adapter="{{ $pc->video_adapter }}"
                                        data-network-controller="{{ $pc->network_controller }}"
                                        data-sound-card="{{ $pc->sound_card }}"
                                        data-optical-drive="{{ $pc->optical_drive }}" data-monitor="{{ $pc->monitor }}"
                                        data-ip-address="{{ $pc->ip_address }}"
                                        data-ipv6-address="{{ $pc->ipv6_address }}">
                                        Mostrar mais
                                    </button></td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Button trigger modal -->








            </div>
        </div>


<!-------------------------- Modal -->

        <div class="modal fade sys-modal" id="exampleModal" tabindex="-1" role="dialog"
        
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">sair</button>

                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered table-striped sys-table">
                            <tbody>
                                <tr>
                                    <th style="width: 35%;">IP da Máquina:</th>
                                    <td id="modal-ip"></td>
                                </tr>
                                <tr>
                                    <th>Endereço IPv6:</th>
                                    <td id="modal-ipv6"></td>
                                </tr>
                                <tr>
                                    <th>Nome do Dispositivo:</th>
                                    <td id="modal-device-name"></td>
                                </tr>
                                <tr>
                                    <th>Grupo:</th>
                                    <td id="modal-group"></td>
                                </tr>
                                <tr>
                                    <th>Servidor Admin:</th>
                                    <td id="modal-admin-server"></td>
                                </tr>
                                <tr>
                                    <th>Status de Inventário:</th>
                                    <td id="modal-inventory-status"></td>
                                </tr>
                                <tr>
                                    <th>Processador (CPU):</th>
                                    <td id="modal-cpu"></td>
                                </tr>
                                <tr>
                                    <th>Placa-Mãe:</th>
                                    <td id="modal-motherboard"></td>
                                </tr>
                                <tr>
                                    <th>Memória Total (MB):</th>
                                    <td id="modal-memory-mb"></td>
                                </tr>
                                <tr>
                                    <th>Armazenamento (GB):</th>
                                    <td id="modal-total-gb"></td>
                                </tr>
                                <tr>
                                    <th>Detalhes de Armazenamento:</th>
                                    <td id="modal-storage-details"></td>
                                </tr>
                                <tr>
                                    <th>Adaptador de Vídeo:</th>
                                    <td id="modal-video-adapter"></td>
                                </tr>
                                <tr>
                                    <th>Controlador de Rede:</th>
                                    <td id="modal-network-controller"></td>
                                </tr>
                                <tr>
                                    <th>Placa de Som:</th>
                                    <td id="modal-sound-card"></td>
                                </tr>
                                <tr>
                                    <th>Drive Óptico:</th>
                                    <td id="modal-optical-drive"></td>
                                </tr>
                                <tr>
                                    <th>Monitor:</th>
                                    <td id="modal-monitor"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">


                    </div>
                </div>
            </div>
        </div>
    @endsection
