const invalido = document.querySelectorAll('.inputInvalido');
const preenchido = document.querySelectorAll('.input-preenchido');
const span = document.querySelectorAll('.spanInput');
const spa = document.querySelectorAll('.spanInputSenha');
const senha = document.getElementById('senha');
const form = document.getElementById('form');

// form.addEventListener('submit', (event) => {
//     event.preventDefault();

//     const nome = nomeUser();
//     const sobrenome = sobrenomeUser();
//     const email = emailUser();
//     const senha = senhaUser();
//     const confirmS = confirmSenha();
//     const celular = celularUser();
//     const data = DataNasc();
//     const cidade = cidadeUser();
//     const estado = estadoUser();

//     if (nome && sobrenome && email && senha && confirmS && celular && data && cidade && estado) {
//         alert("Formulário enviado");
//         window.location.href = "cadastro.php";
//     } else {
//         nomeUser();
//         sobrenomeUser();
//         emailUser();
//         senhaUser();
//         confirmSenha();
//         celularUser();
//         DataNasc();
//         cidadeUser();
//         estadoUser();
//     }


// })


function inputPreenchido(index) {
    if (preenchido[index]) {
        preenchido[index].style.display = 'block';
    }
}

function setErrorSpan(index) {

    if (spa[index]) {
        spa[index].style.display = 'block';
    }

}

function clearErrorSpan(index) {

    if (spa[index]) {
        spa[index].style.display = 'none';
    }
    ;
}

function setError(index) {

    if (invalido[index]) {
        invalido[index].style.display = 'block';
    }
    if (span[index]) {
        span[index].style.display = 'block';
    }


}

function clearError(index) {
    if (invalido[index]) {
        invalido[index].style.display = 'none';
    }
    if (span[index]) {
        span[index].style.display = 'none';
    }

}

function nomeUser() {
    const inputsNome = document.getElementById('nome');
    if (inputsNome && inputsNome.value.length < 3) {
        setError(0);
        return false;
    } else {
        inputPreenchido(0);
        clearError(0);
        return true;
    }

}

function sobrenomeUser() {
    const sobrenome = document.getElementById('sobrenome');
    if (sobrenome && sobrenome.value.length < 3) {
        setError(1);
        return false;
    } else {
        inputPreenchido(1);
        clearError(1);
        return true;
    }
}

function nomeUserName(){
    const username = document.getElementById('username');
    if(username && username.value.length < 3){
        setError(2);
        console.log("por favor me mostre que isso é certo")
    }else{
        inputPreenchido(3);
        clearError(2);
    }
}

function emailUser() {
    const spanEmail = document.querySelector('.spanInputEmail');
    const email = document.getElementById('email');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email && emailRegex.test(email.value)) {
        spanEmail.style.display = 'none';
        inputPreenchido(3);
        clearError(3);

        return true;
    } else {
        spanEmail.style.display = 'block';
        setError(3);

        return false;
    }
}


function senhaUser() {

    if (senha && senha.value.length < 8) {
        setError(4);
        setErrorSpan(0);

        return false;
    } else {
        inputPreenchido(4);
        clearError(4);
        clearErrorSpan(0);

        return true;
    }

}

function confirmSenha() {
    const confirm = document.getElementById('confirmarsenha');
    if (confirm && confirm.value === senha.value) {
        inputPreenchido(5);
        clearError(5);
        clearErrorSpan(1);

        return true;
    } else {
        setErrorSpan(1);
        setError(5);

        return false;
    }
}

function celularUser() {
    const celular = document.getElementById('celular');

    celular.addEventListener("input", () => {
        let limparValores = celular.value.replace(/\D/g, "").substring(0, 11);
        let numArray = limparValores.split("");
        let numFormatado = ""

        if (numArray.length > 0) {
            numFormatado += `(${numArray.slice(0, 2).join("")})`;

        }

        if (numArray.length > 2) {
            numFormatado += `${numArray.slice(2, 7).join("")}`;
        }

        if (numArray.length > 7) {
            numFormatado += `-${numArray.slice(7, 11).join("")}`;
        }

        celular.value = numFormatado;
    })

    if (celular.value.replace(/\D/g, "").length !== 11) {
        setError(6)
        setErrorSpan(2);
        return false;
    } else {
        inputPreenchido(6);
        clearError(6);
        clearErrorSpan(2);

        return true;
    }
}

function DataNasc() {
    const data = document.getElementById('dataNasc');

    if (data.value.length <= 0) {
        setError(7);
        setErrorSpan(3);

        return false;
    } else {
        inputPreenchido(7);
        clearError(7);
        clearErrorSpan(3);

        return true;
    }

}

function cidadeUser() {
    const cidade = document.getElementById('cidade');

    if (cidade.value.length > 0) {
        inputPreenchido(8);
        clearError(8);
        return true;
    } else {
        setError(8);
        return false;
    }
}

function estadoUser() {
    const estado = document.getElementById('estado');

    if (estado.value.length > 0) {
        inputPreenchido(9);
        clearError(9);
        return true
    } else {
        setError(9);
        return false
    }
}
