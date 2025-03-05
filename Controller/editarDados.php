<?php
include "../bd/conexao.php";
session_start();

if (isset($_POST['nomeConta']) && isset($_POST['bioUser']) && isset($_POST['pronomeUser'])){
    $idUser = $_SESSION['id_usuarios'];
    $alterarDados = $_POST['AlterarDados'];
    $nomeConta = $_POST['nomeConta'];
    $bioUser = $_POST['bioUser'];
    $pronomeUser = $_POST['pronomeUser'];

    $nomeConta = mysqli_real_escape_string($conexao, $nomeConta);
    $bioUser = mysqli_real_escape_string($conexao, $bioUser);
    $pronomeUser = mysqli_real_escape_string($conexao, $pronomeUser);

    $sqlPut = "UPDATE usuarios set nomeConta = '$nomeConta', bio = '$bioUser', pronomes = '$pronomeUser' where id_usuarios = '$idUser'";
    if(mysqli_query($conexao, $sqlPut)){
        $sqlGet = "SELECT nomeConta, bio, pronomes from usuarios where id_usuarios='$idUser'";
        $result = $conexao->query($sqlGet);
        if($result->num_rows > 0){
            $dadosRecebidos = $result->fetch_assoc();
            $_SESSION['nomeConta'] = $dadosRecebidos['nomeConta'];
            $_SESSION['bio'] = $dadosRecebidos['bio'];
            $_SESSION['pronomes'] = $dadosRecebidos['pronomes'];
            header('Location: ../view/config.php');
        }else{
            echo"Não foi econtrado nenhum dado com essas informações";        
        }
        
    }else{
        echo"Erro ao executar a query zeca";
    }
}
    

?>