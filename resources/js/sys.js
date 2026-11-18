

document.addEventListener('DOMContentLoaded', function () {

    var modal = document.querySelector('.sys-modal');

    modal.addEventListener('shown.bs.modal', function (e) { // -> não esquecer que o 'shown.bs.bodal vem da documentação do bootstrap

        var button = e.relatedTarget;


        // essas variaveis sao para chamar os valores enviados pelo btn 'mostrar mais'
        var ipAddress = button.getAttribute('data-ip-address');
        var ipv6Address = button.getAttribute('data-ipv6-address');
        var group = button.getAttribute('data-group');
        var adminServer = button.getAttribute('data-admin-server');
        var deviceName = button.getAttribute('data-device-name');
        var inventoryStatus = button.getAttribute('data-inventory-status');
        var motherboard = button.getAttribute('data-motherboard');
        var cpu = button.getAttribute('data-cpu');
        var memoryMb = button.getAttribute('data-memory-mb');
        var storageDetails = button.getAttribute('data-storage-details');
        var totalGb = button.getAttribute('data-total-gb');
        var availableGb = button.getAttribute('data-available-gb');
        var videoAdapter = button.getAttribute('data-video-adapter');
        var networkController = button.getAttribute('data-network-controller');
        var soundCard = button.getAttribute('data-sound-card');
        var opticalDrive = button.getAttribute('data-optical-drive');
        var monitor = button.getAttribute('data-monitor');

        //aqui eu aviso que os textos da tabela do MODAL devem ser iguais aos valores obtidos pelas variaiveis acima ou caso não tenha nenhum valor deve aparecer -
        document.getElementById('modal-ip').textContent = ipAddress || '-';
        document.getElementById('modal-ipv6').textContent = ipv6Address || '-';
        document.getElementById('modal-group').textContent = group || '-';
        document.getElementById('modal-admin-server').textContent = adminServer || '-';
        document.getElementById('modal-device-name').textContent = deviceName || '-';
        document.getElementById('modal-inventory-status').textContent = inventoryStatus || '-';
        document.getElementById('modal-cpu').textContent = cpu || '-';
        document.getElementById('modal-motherboard').textContent = motherboard || '-';
        document.getElementById('modal-memory-mb').textContent = memoryMb ? memoryMb + ' MB' : '-';
        document.getElementById('modal-total-gb').textContent = totalGb ? totalGb + ' GB' : '-';
        document.getElementById('modal-storage-details').textContent = storageDetails || '-';
        document.getElementById('modal-video-adapter').textContent = videoAdapter || '-';
        document.getElementById('modal-network-controller').textContent = networkController || '-';
        document.getElementById('modal-sound-card').textContent = soundCard || '-';
        document.getElementById('modal-optical-drive').textContent = opticalDrive || '-';
        document.getElementById('modal-monitor').textContent = monitor || '-';
        
    })

    
});