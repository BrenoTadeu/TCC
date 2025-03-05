<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagens/logonomecompleto.png" type="image/x-icon">
    <title>AcheiPet | Pág Inicial</title>
    <?php

    if (!isset($_SESSION)) {
        session_start();
    }

    include "../Controller/protect.php";
    include "../Controller/fetchPosts.php";

    $nomeUsuario = $_SESSION['nome'];
    $nomePerfil = $_SESSION['nomeUsuario'];
    $nomeConta = $_SESSION['nomeConta'];
    $imagemUsuario = $_SESSION['imagem_Default'];
    $idConnect = $_SESSION['id_usuarios'];
    ?>
</head>
<style>
    @charset "utf-8";
    @import url('https://fonts.googleapis.com/css2?family=Nova+Square&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .menuRedeToda {
        display: flex;
        height: 100vh;
    }

    .menuPrincipal {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border: none;
        box-shadow: 0px 0px 10px 0px white;
        width: 20%;
        background-color: orange;
        height: 100vh;
        position: fixed;
    }

    .logo {
        width: 130px;
    }

    .nav {
        margin: 2%;
        padding: 2%;
    }

    /* .nav:not(.logo) {
        padding-top: 10%;
    } */

    .nav-link {
        color: white;
        border-radius: 10px;
        margin: 2px;
        padding: 15px;
        font-size: 17px;
    }


    .nav-link:not(.svgMenu):hover {
        background-color: white;
        color: black;
        font-weight: 600;
        transition: 0.4s;
    }

    .svgMenu {
        margin: 1%;
        margin-bottom: 10%;
        width: 100%;
        padding-left: 20px;
        height: 20%;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    .menuMais {
        position: absolute;
        display: none;
        align-items: center;
        justify-content: center;
        background-color: white;
        border-radius: 10px;
        height: 10rem;
        width: 14rem;
        margin-top: 34.8rem;
        margin-left: 1.6rem;

    }

    .linkMenuMais {
        text-align: start;
        display: flex;
        align-items: center;
        border-radius: 7px;
        color: black;
        height: 30px;
        padding-left: 0.6rem;
    }

    .btnMenuMais {
        border: none;

    }

    .linkMenuMais:hover {
        text-decoration: none;
        color: black;
        background-color: #d3d3d3;
        font-weight: 600;
    }

    .logout {
        background-image: url('data:image/svg+xml,%3Csvg%20style%3D%22position%3Aabsolute%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20width%3D%2220%22%20height%3D%2220%22%20fill%3D%22currentColor%22%20class%3D%22bi%20bi-door-open%22%20viewBox%3D%220%200%2016%2016%22%3E%3Cpath%20d%3D%22M8.5%2010c-.276%200-.5-.448-.5-1s.224-1%20.5-1%20.5.448.5%201-.224%201-.5%201%22/%3E%3Cpath%20d%3D%22M10.828.122A.5.5%200%200%201%2011%20.5V1h.5A1.5%201.5%200%200%201%2013%202.5V15h1.5a.5.5%200%200%201%200%201h-13a.5.5%200%200%201%200-1H3V1.5a.5.5%200%200%201%20.43-.495l7-1a.5.5%200%200%201%20.398.117M11.5%202H11v13h1V2.5a.5.5%200%200%200-.5-.5M4%201.934V15h6V1.077z%22/%3E%3C/svg%3E');
        background-repeat: no-repeat;
        background-position: 10px center;
        position: relative;
        text-align: start;
        padding-left: 2rem;
        height: 30px;
        border: none;
        width: 100%;
        border-radius: 7px;
    }

    .logout:hover {
        background-color: #d3d3d3;
        font-weight: 600;
    }

    .divDentroMenu {
        width: 100%;
        height: 70%;
    }

    .navMenus {
        width: 100%;
    }

    .svgLink {
        border-radius: 10px;
        width: 50%;
        height: 50px;
        cursor: pointer;
        border: none;
        color: white;
        padding-right: 10px;
        background-color: orange;
    }

    .svgLink:hover {
        color: black;
        font-weight: 600;
        background-color: white;
    }

    .svgLink:focus {
        outline: 0;
    }

    .colPesquisar {
        background-color: orange;
        position: absolute;
        width: 20vw;
        height: 100vh;
        margin-left: 22.1rem;
        border-right: 2px solid white;
        box-shadow: 0px 0px 10px 0px white;
        padding-top: 0.5rem;
        display: none;
    }

    .inputSearch {
        width: 100%;
        margin-left: 1rem;
        margin-right: 1rem;
        border: none;
        padding: 0.4rem;
        border-radius: 10px;
        margin-bottom: 0.30rem;
    }

    .inputSearch:focus {
        outline: none;
        box-shadow: 0px 0px 10px 2px white;
    }

    .pesquisarUser {
        display: flex;
        align-items: center;
    }

    .result-item {
        padding: 10px;
        cursor: pointer;
        display: flex;
        flex-direction: row;
        color: white;
    }

    .result-item:hover {
        background-color: white;
        color: black;
    }

    .result-item img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    .mensagemPesquisa {
        margin-top: 1rem;
        margin-left: 1rem;
        margin-right: 1rem;
        font-size: 20px;
    }

    .nomePerfilCaba {
        font-size: 15px;
        margin: 0;
        margin-left: 0.10rem;
    }

    .nomeContaCaba {
        font-size: 13px;
        margin-left: 0.10rem;
    }

    .btnPesqui {
        border: none;
        text-align: start;
        width: 100%;
    }

    .btnPesqui:focus {
        border: none;
        outline: 0;
    }

    .imagemPerfilMenu {
        width: 30px;
        height: 30px;
        border-radius: 100%;
    }

    .aposCLick {
        background-color: red;
    }

    .containerBody {
        display: flex;
        background: linear-gradient(to right, orange, #fab64a);
        position: absolute;
        height: 100vh;
        width: 100%;
        z-index: 1;
        margin-bottom: 100%;

    }

    .col1 {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        width: 100%;
    }

    .col1-2 {
        overflow-y: scroll;
        background-color: white;
        display: block;
        text-align: center;
        height: 90vh;
        width: 90vh;
        border-radius: 10px 0px 0px 10px;
    }

    .col1-3 {
        height: 500px;
        margin: 0.3rem 2rem 2rem 1rem;
        width: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .bodyConteiner {
        display: flex;
        align-items: center;
        flex-direction: column;
        height: 100vh;

    }

    .publicarPost {
        margin-top: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 35vw;
    }

    .col2 {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: 40%;
    }

    .col2-2 {
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 90%;
        width: 30vh;
        border-radius: 0px 10px 10px 0px;
    }

    .col2-3 {
        height: 90%;
        width: 90vh;
        display: flex;
        justify-content: start;
        align-items: start;
        flex-direction: column;
    }

    .imagemBody {
        margin: 0.2rem;
        width: 50px;
        height: 50px;
        border-radius: 100%;
    }

    .slaNomePerfil {
        margin: 0.2rem;
        display: flex;
        border-radius: 50px;
        flex-direction: row;
        width: 90%;
        background-color: #d3d3d3;
    }

    .slaNomePerfil:hover {
        cursor: pointer;
    }

    .slaNome {
        display: flex;
        margin: 0.23rem;
        justify-content: center;
        align-items: start;
        flex-direction: column;
    }

    .postPublic {
        width: 85%;
        resize: none;
        margin: 0.1rem;
        border-radius: 10px;
        background-color: #d3d3d3;
        color: black;
        border: none;
        padding: 0.5rem;
    }

    .postPublic:focus {
        outline: none;
    }

    .imgEtextArea {
        width: 100%;
        display: flex;
        flex-direction: row;
        margin-left: 1rem;

    }

    .addImg {
        border-radius: 100%;
        background-color: #d3d3d3;
        width: 30px;
        height: 30px;
        border: none;
    }

    .addImg:hover {
        border: 1px solid white;
        background-color: orange;
        color: white;
        box-shadow: 0px 0px 10px 2px white;
        cursor: pointer;
    }

    .botoesDePost {
        width: 80%;
        align-items: center;
        justify-content: start;
        flex-direction: row;
    }

    .addImg:Focus {
        outline: none;
    }

    .checkboxAnimal {
        display: none;
    }


    .btnDoPostDeAnimalDesa {
        display: flex;
        justify-content: end;
        width: 100%;
    }

    /* .btnDoPostEnviar{
       
    } */

    .btnAnimalDesa {
        background-color: #d3d3d3;
        color: black;
        border: none;
        border-radius: 1rem;
        padding: 0.1rem;
        font-weight: 500;
        margin-left: 10rem;
        margin-top: 0.2rem;
    }

    .btnAnimalDesa:focus {
        outline: none;
    }

    .FileIn {
        opacity: 0;
        display: none;
    }

    .previewPost {
        margin-top: 0;
        width: 85%;
        background-color: #d3d3d3;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        border-radius: 0px 0px 10px 10px;
    }

    #imgsDivisao {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: flex-start;
    }


    .image-container {
        position: relative;
        width: calc(100% / 5 - 10px);
        max-width: 200px;
        flex-grow: 1;
        border-radius: 5px;
        padding: 5px;
        overflow: hidden;
    }

    #preview-image {
        max-width: 100px;
        max-height: 100px;
        object-fit: contain;
        display: block;
        border-radius: 10px;
    }

    .delete-button {
        position: absolute;
        top: 2px;
        right: 2px;
        width: 20px;
        height: 20px;
        background-color: white;
        color: black;
        border: none;
        align-items: center;
        border-radius: 100%;
        padding: 4px;
        cursor: pointer;
    }

    .delete-button:hover {
        background-color: orange;
        border: 1px solid white;
        color: white;
    }

    .delete-button:focus {
        outline: none;
    }

    .submitPublic {
        display: none;
    }

    .btnPostar {
        border-radius: 20px;
        width: 3.4rem;
        border: none;
        background-color: rgba(255, 140, 0, 0.5);
        color: white;
    }

    .btnPostar:focus {
        outline: none;
    }

    .post {
        display: flex;
        flex-direction: column;
        align-items: start;
        width: 100%;
        margin: 0.5rem;
        border-radius: 10px;
        background-color: #d3d3d3;
        padding: 1rem;
    }

    .post-content {
        width: 100%;
    }

    .post-header {
        display: flex;
        flex-direction: row;
        width: 100%;
    }

    .nomes {
        display: flex;
        justify-content: center;
        text-align: start;
    }

    .imgPost {
        max-width: 500px;
        max-height: 500px;
        border-radius: 10px;
    }

    .title {
        margin-left: 2rem;
        margin-right: 2rem;
        height: auto;
        display: flex;
        align-items: start;
        justify-content: start;

    }

    .pPost {
        margin: 0;
        margin-bottom: 0.30rem;
        width: 100%;
        word-wrap: break-word;
        text-align: start;
    }

    #imagemPerfil {
        cursor: pointer;
    }

    .btnComentario {
        width: 100%;
        display: flex;
        justify-content: end;
    }

    .comentarios {
        background-color: orange;
        border-radius: 8px;
        padding: 0.2rem;
        color: white;
        border: none;
    }

    .comentarios:focus {
        outline: none;
        box-shadow: 0px 0px 10px 2px orange;
        border: 1px solid white;
    }

    .recortarImagem {
        z-index: 1;
        background-color: white;
        border: 2px solid white;
        border-radius: 10px;
        box-shadow: 0px 0px 20px 0px white;
        position: absolute;
        height: 80vh;
        width: 70vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .corpoTodo {
        width: 100vw;
        height: 100vh;
        z-index: 1;
        position: absolute;
        display: none;
        align-items: center;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .dentroRecortar {
        display: flex;
        justify-content: start;
        align-items: end;
        flex-direction: column;
        height: 80vh;
        width: 100vw;
    }

    .fecharRecortar {
        margin-right: 0.4rem;
        margin-top: 0.4rem;
        border-radius: 100%;
        border: none;
    }

    .fecharRecortar:hover {
        background-color: #d3d3d3
    }

    .fecharRecortar:focus {
        outline: none;
    }

    .adicionarComent {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }

    .postsDeComent {
        border: 2px solid black;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .adicionarImagem {
        display: flex;
        height: 30px;
    }


    @media (max-width: 768px) {
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .menuPrincipal {
            flex-direction: row;
            height: 70px;
            justify-content: center;
            width: 100%;
            padding: 10px 0;
            position: fixed;
            z-index: 2;
            bottom: 0;
        }

        .nav {
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .logo {
            width: 100px;
            display: none;
        }

        .nav-link {
            font-size: 14px;
            padding: 12px;
        }

        .svgMenu {
            justify-content: center;
            padding-left: 0;
            display: none;
        }

        .menuMais {
            margin-top: 0;
            margin-left: 0;
            width: 100%;
            bottom: 10%;
            display: none;
        }

        .btnMenuMais {
            width: 100%;
            text-align: center;
            display: none;
        }

        .linkMenuMais:hover {
            text-decoration: none;
            color: black;
            background-color: #d3d3d3;
            font-weight: 600;
        }

        .col1-2 {
            border-radius: 0px;
            display: flex;
            position: fixed;
            height: auto;
            width: 100%;
            top: 0;
            right: 0;
        }

        .bodyContainer {
            height: auto;
            position: fixed;
            top: 0;
            left: 0;
        }

        .publicarPost {
            width: 95%;
            margin-left: 1rem;
            display: flex;
            justify-content: center;
        }

        .col2-2 {
            display: none;
        }

        .adicionarImagem {
            flex-direction: row;
        }

        .btnAnimalDesa {
            align-items: center;
            width: 250px;
            margin-left: 10%;
        }

        .btnDoPostDeAnimalDesa {
            width: 90%;
        }

        .colPesquisar{
            position: fixed;
            z-index: 1;
            width: 100%;
            top:0;
            right: 0;
        }

        .pesquisarUser{
            z-index: -1;
        }

        .post{
            width: 90%;
        }

        .imgPost{
            max-width: 250px;
        }
    }
</style>

<body>
    <div class="containerBody">
        <!-- Menu do sistema -->
        <div class="menuRedeToda">
            <menu class="menuPrincipal">
                <a href="sistema.php">
                    <img class="logo" src="imagens/logonomecompleto.png" alt="logo">
                </a>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link " href="sistema.php"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                height="30" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                <path
                                    d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
                            </svg> Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link btn-outline-light btnPesqui" id="buttonPesq"><svg
                                xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg> Pesquisar</button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="searchPets.php"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                height="30" fill="currentColor" class="bi bi-binoculars" viewBox="0 0 16 16">
                                <path
                                    d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5z" />
                            </svg> Animais Desaparecidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                <path
                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                            </svg> Notificações</a>
                    </li>
                    <li class="nav-item">
                        <a href="profile.php?tipoPost=geral&query=<?php echo $idConnect ?>" class="nav-link"><img
                                src="<?php echo isset($imagemUsuario) ? $imagemUsuario : 'upload/profileNotImage.jpeg' ?>"
                                class="imagemPerfilMenu" alt=""> <?php echo "$nomePerfil" ?></a>
                    </li>

                </ul>
                <div class="menuMais">
                    <div class="divDentroMenu">
                        <Form method="POST" action="../Controller/logout.php">
                            <nav class="nav flex-column">
                                <a class="linkMenuMais" href="config.php"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="20" fill="currentColor" class="bi bi-gear"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                                        <path
                                            d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                                    </svg> Configurações</a>
                                <button class="btnMenuMais"><input style="cursor:pointer" class="logout" type="submit"
                                        name="btnSair" value="Sair"></button>

                            </nav>
                        </Form>
                    </div>
                </div>
                <div class="svgMenu" id="abrirMenuMais">
                    <button class="svgLink aposClick" id="btnHAM">
                        <svg style="display:inline-block" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="currentColor" class="bi bi-list open" id="openMenuMais" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                        </svg>
                        <svg style="display:none" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                            fill="currentColor" class="bi bi-x-lg" id="closeMenuMais" viewBox="0 0 16 16">
                            <path
                                d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                        </svg>
                    </button>
                </div>
            </menu>
            <div class="colPesquisar" id="colPesquisa">
                <div class="pesquisarUser">
                    <input type="search" class="inputSearch" id="searchForm" placeholder="Pesquisar">
                    <button type="submit" style="display: none" id="confirmSearch"></button>
                </div>
                <div id="results" class="resultss"></div>
            </div>
        </div>
        <div class="col1">
            <div class="col1-2">
                <div class="bodyConteiner">
                    <form action="../Controller/postPublicacao.php" enctype="multipart/form-data" method="post">
                        <div class="publicarPost">
                            <div class="imgEtextArea">
                                <img src="<?php echo "$imagemUsuario" ?>" alt="" class="imagemPerfilMenu"
                                    style="width: 40px; height: 40px">
                                <textarea name="postPubli" id="publiPost" class="postPublic" cols="4" rows="1"
                                    placeholder="O que você está pensando..."></textarea>
                            </div>
                            <div id="previewimg" class="previewPost">
                                <div id="imgsDivisao" class="imgContainer"></div>
                            </div>
                            <div class="botoesDePost">
                                <div class="adicionarImagem">
                                    <div class="btnDoPostEnviar"><button type="button" class="addImg" id="addImage"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-file-earmark-image" viewBox="0 0 16 16">
                                            <path d="M6.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                            <path
                                                d="M14 14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zM4 1a1 1 0 0 0-1 1v10l2.224-2.224a.5.5 0 0 1 .61-.075L8 11l2.157-3.02a.5.5 0 0 1 .76-.063L13 10V4.5h-2A1.5 1.5 0 0 1 9.5 3V1z" />
                                        </svg></button></div>
                                    <input type="file" name="imgsPost" class="FileIn" id="fileInput"
                                        accept="image/jpg, image/JPG, image/jpeg, image/png">
                                    <div class="btnDoPostDeAnimalDesa">
                                        <button type="button" class="btnAnimalDesa" id="animalDesapa">Animal
                                            Desaparecido?</button>
                                    </div>
                                        <button type="button" class="btnPostar" id="btn-postar">Post</button>
                                    <input name="acao" class="submitPublic" id="submit-post" type="submit">
                                    <input type="checkbox" name="animalDesapa" class="checkboxAnimal" id="checkBoxAni"
                                        placeholder="animal desaparecido">
                                </div>
                    </form>
                </div>
                <?php foreach ($posts as $post): ?>
                    <div class="post">
                        <div class="post-header">
                            <img src="<?php echo $post['imagem_Default']; ?>" alt="Imagem de perfil"
                                class="imagemPerfilMenu" id="imagemPerfil">
                            <div class="nomes">
                                <h5 style="font-size: 16px"><?php echo htmlspecialchars($post['nomeConta']); ?></h5>
                                <h6 style="font-size: 12px"><?php echo htmlspecialchars("@" . $post['nomeUsuario']) ?></h6>
                            </div>
                        </div>
                        <div class="post-content">
                            <?php if ($post['imagem'] === NULL): ?>
                                <div class="title">
                                    <p class="pPost"><?php echo nl2br(htmlspecialchars($post['titulo'])); ?></p>
                                </div>
                            <?php else: ?>
                                <div class="title">
                                    <p class="pPost"><?php echo nl2br(htmlspecialchars($post['titulo'])); ?></p>
                                </div>
                                <img src="<?php echo $post['imagem']; ?>" class="imgPost" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="post-footer">
                            <span style="font-size: 10px">Publicado em:
                                <?php echo date("d/m/Y", strtotime($post['data_publicacao'])); ?></span>
                        </div>
                        <div class="btnComentario">
                            <button type="button" class="comentarios" id="comentar"
                                data-post-id="<?php echo $post['id_post'] ?>">Comentar</button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
    </div>
    <div class="col2">
        <div class="col2-2">
            <div class="col2-3">
                <div class="slaNomePerfil">
                    <img src="<?php echo "$imagemUsuario"; ?>" class="imagemBody" alt="">
                    <div class="slaNome">
                        <h5 style="font-size: 15px"><?php echo "$nomeConta" ?></h5>
                        <h6 style="font-size: 11px"><?php echo "@$nomePerfil" ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="arquivoJs/scriptPagInicial.js"></script>
    <script type="module" src="arquivoJs/scriptPesquisar.js"></script>
    <script src="arquivoJs/scriptAbrirMais.js"></script>
</body>

</html>

</html>