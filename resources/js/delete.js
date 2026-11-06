import Swal from 'sweetalert2'
import $ from 'jquery';



async function deleteActive(activeId) {
    const id = activeId.dataset.url;


    Swal.fire({
        title: "Tem certeza?",
        text: "Você não poderá reverter isso.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Confirmar"
    }).then((result) => {
        if (result.isConfirmed) {

            const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

            $.ajax({
                url: id,
                type: 'DELETE',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': token
                },
                success: function (data) {
                    Swal.fire({
                        title: data.status,
                        text: data.message,
                        icon: "success"
                    });

                },
                error: function (xhr) { 
                    if (xhr.responseJSON) {
                        Swal.fire({
                            icon: "error",
                            title: xhr.responseJSON.status || "Erro!",
                            text: xhr.responseJSON.message
                        });
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Atenção!",
                            text: "Erro de conexão. Verifique sua rede ou servidor."
                        });
                    }
                }
            });

        }


    });



}


const list = document.querySelector(".list-container");

if (list) {

    list.addEventListener('click', async (e) => {

        const btnDelete = e.target.closest('.btn-danger');

        if (!btnDelete) return;

        await deleteActive(btnDelete);





    });
}
