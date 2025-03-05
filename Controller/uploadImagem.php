<?php
include("../bd/conexao.php");
session_start();

$idUsuario = $_SESSION["id_usuarios"];

if (isset($_FILES['arquivo']) && isset($_POST['AlterarImagem'])) {
        $arquivo = $_FILES['arquivo'];
        if ($arquivo['error'] === UPLOAD_ERR_OK) {
            $arquivoNovo = explode('.', $arquivo['name']);
            $extensao = strtolower(end($arquivoNovo));

            $extensoesPermitidas = ['jpg', 'jpeg', 'png'];

            if (in_array($extensao, $extensoesPermitidas)) {
                $diretorioUpload = "../View/upload/";
                $nomeArquivoNovo = uniqid() . "." . $extensao;
                $caminhoCompleto = $diretorioUpload . $nomeArquivoNovo;

                if (move_uploaded_file($arquivo['tmp_name'], $caminhoCompleto)) {

                    $sqlImagem = "INSERT INTO imagens (imagem_Default) values ('$caminhoCompleto')";
                    $result = $conexao->query($sqlImagem);

                    if ($conexao->query($sqlImagem) === TRUE) {
                        $idImagem = $conexao->insert_id;

                        $sqlUsuario = "UPDATE usuarios SET profile_image = '$idImagem' where id_usuarios = '$idUsuario'";
                        $result = $conexao->query($sqlUsuario);
                        if ($conexao->query($sqlUsuario) === TRUE) {
                            $sql = "SELECT profile_Image FROM usuarios WHERE id_usuarios = '$idUsuario'";
                            $resultImage = $conexao->query($sql);
                            if ($resultImage->num_rows > 0) {
                                $row = $resultImage->fetch_assoc();
                                $imagemAssociada = $row["profile_Image"];

                                $sqlImagem = "SELECT imagem_Default from imagens where id_imagem = '$imagemAssociada'";
                                $resultImagem = $conexao->query($sqlImagem);

                                if ($resultImagem->num_rows > 0) {
                                    $row = $resultImagem->fetch_assoc();
                                    $imagemUser = $row["imagem_Default"];

                                    $_SESSION["imagem_Default"] = $imagemUser;
                                    header("Location: ../View/config.php");
                                    exit;
                                }
                            } else {
                                echo ("Deu tudo errado lindão");
                            }

                        } else {
                            echo ('não enviei nada seu porrinha');
                        }
                    } else {
                        echo ("não foi enviado pois não é o tipo de arquivo que foi especificado");
                    }
                } else {
                    echo 'erro no upload' . $arquivo['error'];
                }
            }
        }
    }

?>