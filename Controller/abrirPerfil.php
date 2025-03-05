<?php
require '../bd/conexao.php';

if (!isset($_SESSION)) {
    session_start();
}

$searchUser = [];

$query = isset($_GET['query']) ? intval($_GET['query']) : 0;

$sql = "SELECT usuarios.id_usuarios, usuarios.nomeUsuario, usuarios.nomeConta, usuarios.bio, usuarios.pronomes, imagens.imagem_Default from usuarios inner join imagens on imagens.id_imagem = usuarios.profile_Image where id_usuarios = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param('s', $query);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       $searchUser[] = $row;
    }
    
}
?>