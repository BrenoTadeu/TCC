<?php
include "../bd/conexao.php";
if (!isset($_SESSION)) {
    session_start();
}

$userid = isset($_GET['query']) ? (int)$_GET['query'] : 0;
if ($userid === 0) {
    echo "Nenhum `userid` válido foi fornecido.";
    exit;
}

if (!isset($_SESSION['id_usuarios'])) {
    echo "Sessão não iniciada ou `id_usuarios` não definido.";
    exit;
}

if (isset($_GET['tipoPost'])) {
    $tipoPost = $_GET['tipoPost'];
    $sql = '';

    switch ($tipoPost) {
        case 'geral':
            $sql = "SELECT usuarios.nomeConta, usuarios.nomeUsuario, imagens.imagem_Default, posts.titulo, posts.imagem, posts.data_publicacao, posts.petPerdido
                    FROM usuarios 
                    LEFT JOIN imagens ON imagens.id_imagem = usuarios.profile_Image 
                    INNER JOIN posts ON posts.id_usuario = usuarios.id_usuarios 
                    WHERE id_usuarios = ? order by posts.data_publicacao DESC";
            break;
        case 'midias':
            $sql = "SELECT usuarios.nomeConta, usuarios.nomeUsuario, imagens.imagem_Default, posts.titulo, posts.imagem, posts.data_publicacao, posts.petPerdido
                    FROM usuarios 
                    INNER JOIN imagens ON imagens.id_imagem = usuarios.profile_Image 
                    INNER JOIN posts ON posts.id_usuario = usuarios.id_usuarios 
                    WHERE id_usuarios = ? AND posts.imagem IS NOT NULL";
            break;
        case 'perdidos':
            $sql = "SELECT usuarios.nomeConta, usuarios.nomeUsuario, imagens.imagem_Default, posts.titulo, posts.imagem, posts.data_publicacao, posts.petPerdido
                    FROM usuarios 
                    INNER JOIN imagens ON imagens.id_imagem = usuarios.profile_Image 
                    INNER JOIN posts ON posts.id_usuario = usuarios.id_usuarios 
                    WHERE id_usuarios = ? AND posts.petPerdido = 1";
            break;
        default:
            echo "Tipo de post não selecionado.";
            exit;
    }
} else {
    echo "Tipo de post não especificado.";
    exit;
}

$todosPosts = [];
if ($stmt = $conexao->prepare($sql)) {
    $stmt->bind_param("i", $userid);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    echo "Erro na preparação da consulta SQL.";
}
?>
