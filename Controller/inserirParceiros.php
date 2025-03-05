<?php
require_once '../bd/conexao.php'; // Requerendo a conexão com o banco de dados

if ($_POST) {
    // Obtenção dos dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $opcao = $_POST['opcao'];
    $comentario = $_POST['comentario'];

    // Validação simples para evitar campos vazios
    if (empty($nome) || empty($email) || empty($opcao) || empty($comentario)) {
        echo "<p>Por favor, preencha todos os campos obrigatórios.</p>";
    } else {
        // Consulta SQL com placeholders para evitar injeção SQL
        $sql = "INSERT INTO parceiros (nome, email, opcao, comentario) VALUES (?, ?, ?, ?)";
        $stmt = $conexao->prepare($sql);

        // Verifica se a preparação da consulta foi bem-sucedida
        if ($stmt) {
            // Vinculação dos parâmetros
            $stmt->bind_param("ssss", $nome, $email, $opcao, $comentario);

            // Execução da consulta
            if ($stmt->execute()) {
                //adicionei no dia 03/09/2024
                echo "<script>alert('Mensagem enviada com sucesso!.');";
                echo "location.href='index.html'</script>";
            } else {
                echo "Erro ao inserir os dados: " . $stmt->error;
            }

            // Fechamento da declaração
            $stmt->close();
        } else {
            echo "Erro na preparação da consulta: " . $conexao->error;
        }
    }

    // Fechamento da conexão
    $conexao->close();
}
