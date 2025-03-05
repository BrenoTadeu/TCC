<?php include "../bd/conexao.php"; ?>


<?php

if (!empty($_POST['email']) || !empty($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (strlen($email) === 0) {
        echo ('Por favor digite uma email válido');
    } else if (strlen($senha) === 0) {
        echo ('Por Favor digite uma senha');
    } else {

        $email = $conexao->real_escape_string($_POST['email']);
        $senha = $conexao->real_escape_string($_POST['senha']);


        $sql = ("SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'");
        $result = $conexao->query($sql) or die("Falha na execução do código" . $conexao->error);

        if ($result->num_rows > 0) {
            $linhaDados = $result->fetch_assoc();
            
            if(!isset($_SESSION)){
                session_start();
            }
            
            $_SESSION["id_usuarios"] = $linhaDados["id_usuarios"];
            $_SESSION['nome'] = $linhaDados['nome'];
            $_SESSION['sobrenome'] = $linhaDados['sobrenome'];
            $_SESSION['email'] = $linhaDados['email'];
            $_SESSION['numero'] = $linhaDados['numero'];
            $_SESSION['dataNasc'] = $linhaDados['dataNasc'];
            $_SESSION['nomeUsuario'] = $linhaDados['nomeUsuario'];
            $_SESSION['nomeConta'] = $linhaDados['nomeConta'];
            $_SESSION['bio'] = $linhaDados['bio'];
            $_SESSION['pronomes'] = $linhaDados['pronomes'];
            $imagemPerfil = $linhaDados['profile_Image'];

            $sqlImage = "SELECT imagem_Default FROM imagens where id_imagem = '$imagemPerfil'";
            $resultImage = $conexao->query($sqlImage) or die("Erro na conexão". $conexao->error);
            
            if( $resultImage->num_rows > 0) {
                $resultImage = $resultImage->fetch_assoc();
                $_SESSION["imagem_Default"] = $resultImage["imagem_Default"];
            }else{
               die("nenhuma imagem foi encontrada");
            }
            print_r($_SESSION);
            header('Location: ../View/sistema.php');
        } else {
            unset($_SESSION['nome']);
            unset($_SESSION['sobrenome']);
            unset($_SESSION['email']);
            unset($_SESSION['dataNasc']);

            header("Location: ../View/index3.html");
        }
    }
}

?>