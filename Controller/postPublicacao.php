<?php
include "../bd/conexao.php";

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['postPubli'])) {
    $textArea = $_POST['postPubli'];
    $checkboxAni = isset($_POST['animalDesapa']) ? 1 : 0;
    $idUsuario = $_SESSION['id_usuarios'];
    $diretorioUpload = '../View/uploadPost/';

    if (!is_dir($diretorioUpload)) {
        mkdir($diretorioUpload, 0777, true);
    }

    if (isset($_FILES['imgsPost']) && $_FILES['imgsPost']['error'] === UPLOAD_ERR_OK) {
        $imagens = $_FILES['imgsPost'];
        $nomeArquivoOriginal = $imagens['name'];
        $nomeNovo = explode('.', $nomeArquivoOriginal);
        $tipoArquivo = strtolower(end($nomeNovo));
        $extensoesPermitidas = ['jpg', 'png', 'jpeg'];

        if (in_array($tipoArquivo, $extensoesPermitidas)) {
            $nomeArquivoUnico = uniqid() . '.' . $tipoArquivo;
            $caminhoDestino = $diretorioUpload . $nomeArquivoUnico;

            if (move_uploaded_file($imagens['tmp_name'], $caminhoDestino)) {
                $sql = "INSERT INTO posts (id_usuario, titulo, imagem, petPerdido) 
                        VALUES ('$idUsuario', '$textArea', '$caminhoDestino', '$checkboxAni')";
                if ($conexao->query($sql) === TRUE) {
                    echo "Post com imagem enviado com sucesso.";
                } else {
                    echo "Erro ao salvar o post no banco de dados: " . $conexao->error;
                }
            } else {
                echo "Erro ao mover o arquivo enviado.";
            }
        } else {
            echo "Erro: Extensão de arquivo não permitida. Permitidas: jpg, png, jpeg.";
        }
    } else {
        $sql = "INSERT INTO posts (id_usuario, titulo, petPerdido) 
                VALUES ('$idUsuario', '$textArea', '$checkboxAni')";
        if ($conexao->query($sql) === TRUE) {
            echo "Post sem imagem enviado com sucesso.";
        } else {
            echo "Erro ao salvar o post sem imagem: " . $conexao->error;
        }
    }
    header("location: ../view/sistema.php");

    $conexao->close();
} else {
    echo "Método de requisição inválido.";
}
?>