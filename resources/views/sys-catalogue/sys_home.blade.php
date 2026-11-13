@extends('./actives/master')
@section('content')

<div class="sys-container">
    <div class="sys-title">
        <h2 class="title">SysCatalogue</h2>    
    </div>    
    <div class="machines">

        @foreach ($pcs as $pc)
            <div class="pc-card">

                <div class="pc-ip">
                    <h3 class="ip">IP: {{$pc->ip}}</h3>
                </div>
                <div class="pc-configs">
                    <p class="os">Sistema Operacional: {{$pc->ip}}</p>
                    <h4>RAM</h4>
                    <p class="ram_total">(TOTAL): {{$pc->ram_total}}</p>
                    <p class="ram_used">(USADO): {{$pc->ram_used}}</p>
                    <p class="ram_free">(LIVRE): {{$pc->ram_free}}</p>
                    <h4>MEMÓRIA EM DISCO</h4>
                    <p class="disk_total"> (TOTAL): {{$pc->disk_total}}</p>
                    <p class="disk_used">(USADO): {{$pc->disk_used}}</p>
                    <p class="disk_free">(LIVRE): {{$pc->disk_free}}</p>
                    <p class="gpu_name is-visible">GPU: {{$pc->gpu_name}}</p>
                    <p class="gpu_memory_total is-visible">Memória da GPU: {{$pc->gpu_memory_total}}</p>
                    <p class="cpu_name is-visible">Nome da CPU: {{$pc->ip}}</p>
                    <p class="number_of_cores is-visible">Núcleos: {{$pc->numbar_of_cores}}</p>
                    <p class="number_of_logical_processors is-visible">Núcleos lógicos: {{$pc->number_of_logical_processors}}</p>
                    <p class="cpu_max_clock_speed is-visible">Velocidade da CPU em Hzs: {{$pc->cpu_max_clock_speed}}</p>
                    <p class="cpu_data_width is-visible">largura de seila oq: {{$pc->cpu_data_width}}</p>
                    
                    <div class="btn-expand"><h4>Expandir</h4></div>
                </div>
            </div>
        @endforeach

    </div>
</div>    
@endsection
