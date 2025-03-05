<?php
require "../bd/conexao.php";

if (!isset($_SESSION)) {
    session_start();
}

$query = isset($_GET['query']) ? $_GET['query'] : '';

if ($query !== '') {
    $sql = "SELECT usuarios.id_usuarios, usuarios.nomeUsuario, usuarios.nomeConta, usuarios.bio, usuarios.pronomes, imagens.imagem_Default from usuarios inner join imagens on imagens.id_imagem = usuarios.profile_Image where nomeUsuario Like '%$query%'";
    $result = $conexao->query($sql);
    $searchUser = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if($row['id_usuarios'] == $_SESSION['id_usuarios'] ){
                echo'';
            }else{
            echo"
             <div class='result-item' id='resultSearch' data-user-id='" . $row['id_usuarios'] . "'>
                <img src='" . htmlspecialchars($row['imagem_Default']) . "' alt='Foto de perfil'>
                <div class='nomeeusuario'>
                    <h5 class='nomePerfilCaba'>" . htmlspecialchars($row['nomeConta']) . "</h5>
                    <h6 class='nomeContaCaba'>".htmlspecialchars($row['nomeUsuario'])."</h6>
                </div>
            </div>
             ";
            }
        }
    }else{
        echo'<p class="mensagemPesquisa" style="color: white;">nenhum resultado</p>';
    }

}

























?>