import Swal from 'sweetalert2'

const actives = document.querySelector(".name");
const sector = document.querySelector(".sector");
const description = document.querySelector(".description");
const form = document.querySelector("form");

const errorAlert = document.querySelector(".alert-danger");



form.addEventListener('submit', async (e) => {

    try {
        e.preventDefault();

    if (!actives.value || !sector.value || !description.value) {

        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Todos os campos precisam ser preenchidos! ",
        });

        return;

    }

    const formData = new FormData(form);
    const token = document.querySelector('input[name="_token"]').value; // aqui ele está puxando la do home.blade, mas lá está declarado utilizando o @csrf

        const response = await fetch(form.action, {
            method: 'POST',
            body: formData, //o nosso token já é verificado aqui
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': token //deixar o token no header por boa prática
            }
        });

        const data = await response.json(); //aqui está buscando la no UserController.php o jason que criei
        if (response.ok) { //o .ok só funciona pq eu coloquei para retortar o codigo padrão 200 la no response do UserController
            Swal.fire({
                title: "Sucesso!",
                text: data.message || "O Ativo foi cadastrado com sucesso!",
                icon: "success"
            }).then(() => {
                form.reset(); // uso o reset para resetar o form sem recarregar a página
            });

        } else {
            // aqui é para caso o usuário consiga inserir dados que o laravel regeite

            Swal.fire({
                icon: "error",
                title: data.status,
                text: data.message
            });
               console.log("Passei 4");
        }
    } catch (error) { //para conseguir testar esse erro de conexção é só tirar la o codigo 200 do response no UserController
console.log(error);
       
        Swal.fire({
            icon: "error",
            title: 'Atenção!',
            text: 'Erro de conexão.'
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