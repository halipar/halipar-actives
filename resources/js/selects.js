import Swal from 'sweetalert2'

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
            text: "Todos os campos precisam ser preenchidos! ",
        });

    } else {
        Swal.fire({
            title: "Sucesso!",
            text: "O Ativo foi cadastrado com sucesso!",
            icon: "success"
        }).then((result)=> {
            if(result.isConfirmed || result.isDismissed){
                form.submit();
            }
            
        });
    }





})

/* function toggleActive(){
    contentSelect.classList.toggle("active")

    if(contentSelect.classList.contains("active")){
        inputSelect.focus();
        iconSelect.classList.value = " ";
    } else{
        iconSelect.classList.value = "x";
    }
}*/