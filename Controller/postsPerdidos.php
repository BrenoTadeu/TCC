<?php
require "../bd/conexao.php";

$sql="SELECT usuarios.nomeConta, usuarios.nomeUsuario, imagens.imagem_Default, posts.titulo, posts.imagem, posts.data_publicacao, posts.petPerdido from usuarios INNER JOIN imagens ON imagens.id_imagem = usuarios.profile_Image inner join posts on posts.id_usuario = usuarios.id_usuarios where posts.petPerdido = 1 order by posts.data_publicacao DESC ";
$result = $conexao->query($sql);
$posts = [];
$postSolo = [];
if ($result->num_rows > 0) {
    $i = 0;
    while($row = $result->fetch_assoc()){
        $posts[] = $row;
        $i++;
    }
}
?>