<?php
include "../bd/conexao.php";

if (!isset($_SESSION)) {
    session_start();
}

$id = $_SESSION['id_usuarios'] ?? null;

if ($id && isset($_POST['nomedousuario'], $_POST['sobrenomedousuario'], $_POST['nomedeconta'], $_POST['emaildousuario'], $_POST['numerousuario'])) {
    $nome = $_POST['nomedousuario'];
    $sobrenome = $_POST['sobrenomedousuario'];
    $username = $_POST['nomedeconta'];
    $email = $_POST['emaildousuario'];
    $num = $_POST['numerousuario'];

    $sql = "UPDATE usuarios SET nome = ?, sobrenome = ?, nomeUsuario = ?, email = ?, numero = ? WHERE id_usuarios = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('sssssi', $nome, $sobrenome, $username, $email, $num, $id);

    if ($stmt->execute()) {
        $_SESSION['nome'] = $nome;
        $_SESSION['sobrenome'] = $sobrenome;
        $_SESSION['nomeUsuario'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['numero'] = $num;

        header("Location: ../view/config.php");
    } else {
        echo "Erro ao atualizar os dados.";
    }

    $stmt->close();
} else {
    echo "Erro: dados incompletos ou sessão inválida.";
}

$conexao->close();
?>
