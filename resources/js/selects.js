import Swal from 'sweetalert2'
import $ from 'jquery';

const actives = document.querySelector(".name");
const sector = document.querySelector(".sector");
const description = document.querySelector(".description");
const form = document.querySelector("form");

const errorAlert = document.querySelector(".alert-danger");

form.addEventListener('submit', (e) => {
    e.preventDefault();

    if (!actives.value || !sector.value || !description.value) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Todos os campos precisam ser preenchidos!",
        });
        return;
    }

    const formdata = new FormData(form);
    const token = document.querySelector('input[name="_token"]').value;



    $.ajax({
        url: form.action,
        type: 'POST',
        data: formdata,
        processData: false,
        contentType: false,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': token
        },
        success: function (data) {

            Swal.fire({
                title: "Sucesso!",
                text: data.message,
                icon: "success"

            }).then(() => { form.reset(); });
        },
        error: function (xhr) { //o xhr serve como abreviação para XMLHttpRequest, ou seja, não é usando apenas para o bloco de erro, mas como coloquei ele no erro, isso fará com que todas as requisições que não forem um success serão tidas como um erro.

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
})

