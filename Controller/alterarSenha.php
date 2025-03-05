<?php
include "../bd/conexao.php";

if (!isset($_SESSION)) {
    session_start();
}

$id = $_SESSION['id_usuarios'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $id) {
    $currentPassword = $_POST['currentPassword'] ?? '';
    $newPassword = $_POST['newPassword'] ?? '';

    if (!$currentPassword || !$newPassword) {
        echo json_encode(["status" => "error", "message" => "Todos os campos são obrigatórios."]);
        exit;
    }


    $query = $conexao->query("SELECT senha FROM usuarios WHERE id_usuarios = $id");
    $user = $query->fetch_assoc();

    if (!$user || $user['senha'] !== $currentPassword) {
        echo json_encode(["status" => "error", "message" => "Senha atual incorreta."]);
        exit;
    }


    $update = $conexao->query("UPDATE usuarios SET senha = '$newPassword' WHERE id_usuarios = $id");

    if ($update) {
        session_start();
        session_unset();
        session_destroy();
        header('Location: ../View/index3.html');
        exit;
    } else {
        echo json_encode(["status" => "error", "message" => "Erro ao atualizar a senha."]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Acesso não autorizado."]);
}

$conexao->close();
?>

