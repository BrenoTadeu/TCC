function mostrarCamposAdicionais() {
    var tipoParceria = document.getElementById('type').value;
    var camposEstudante = document.getElementById('campos-estudante');

    // Exibe os campos adicionais se a opção for "Estudante de Veterinária"
    if (tipoParceria === 'Estudante') {
        camposEstudante.style.display = 'block';
    } else {
        camposEstudante.style.display = 'none';
    }
}

        // Função para exibir a mensagem de sucesso
        function msg() {
            $("#mensagem").addClass('ver');
            setTimeout(function () {
                $("#mensagem").removeClass('ver');
            }, 4000); // Duração da mensagem de 4 segundos
        }

        // Função de validação do formulário
        function validarFormularioCadastro(frm) {
            let nome = frm.name.value;
            let email = frm.contact.value;

            // Limpa mensagens anteriores
            let divMensagens = document.querySelector("#mensagem");
            divMensagens.textContent = ""; // Limpa as mensagens de erro

            // Validação simples dos campos Nome e E-mail
            if (nome.length === 0) {
                divMensagens.textContent = "Nome inválido.";
                msg(); // Exibe a mensagem de erro
                return false; // Bloqueia o envio
            }
            if (email.length === 0) {
                divMensagens.textContent = "E-mail inválido.";
                msg(); // Exibe a mensagem de erro
                return false; // Bloqueia o envio
            }

            // Se tudo estiver correto, exibe a mensagem de agradecimento
            divMensagens.textContent = "Muito Obrigado por sua Mensagem!";
            msg(); // Exibe a mensagem de sucesso

            // O formulário será enviado normalmente para o servidor
            return true; // Permite o envio
        }
