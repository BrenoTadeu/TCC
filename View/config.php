<!DOCTYPE html>
<header lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="config.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        <link rel="shortcut icon" href="imagens/logo escrito acheipet fundo png.png" type="image/x-icon">
        <title>AcheiPet | Config</title>
        <?php
        require "../bd/conexao.php";
        include "../Controller/protect.php";
        if (!isset($_SESSION)) {
            session_start();
        }
        $nomeUsuario = $_SESSION['nome'];
        $nomePerfil = $_SESSION['nomeUsuario'];
        $idUsuario = $_SESSION['id_usuarios'];
        $nomeConta = $_SESSION['nomeConta'];
        $bioUser = $_SESSION['bio'];
        $pronome = $_SESSION['pronomes'];
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
            justify-content: center;
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
            width: 50%;
        }

        .col1-2 {
            background-color: white;
            display: flex;
            align-items: center;
            height: 90%;
            width: 35vh;
            border-radius: 10px 0px 0px 10px;
        }

        .col1-3 {
            height: 90%;
            margin-left: 12%;

        }

        .col2 {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 70%;
        }

        .col2-2 {
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 90%;
            width: 100vh;
            border-radius: 0px 10px 10px 0px;
        }

        .col2-3 {
            height: 90%;
            width: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .itemNav {
            list-style-type: none;
        }

        .menuConfigu {
            width: 16.5rem;
            height: 100%;
            border: none;
        }

        .navItem {
            display: flex;
            padding: 1px;
            margin: 10px;
            width: 90%;
            height: 40px;
            border-radius: 10px;
            justify-content: start;
            align-items: center;
        }

        .navItem:hover {
            background-color: #d3d3d3;
            transition: 0.2s;
        }

        .navLink {
            color: black;
            text-decoration: none;
            padding-right: 11rem;
            padding-top: 0.2rem;
            padding-bottom: 0.2rem;
            padding-left: 1rem;
            width: 100px;
        }

        .h2Config {
            font-size: 28px;
            padding-bottom: 1rem;
            padding-left: 0.45rem;
            font-weight: 600;
        }

        .pMenuConfig {
            font-size: 18px;
            padding-left: 20px;
            font-weight: 600;
        }

        .pMenuConfig:hover {
            cursor: default;
        }

        .navLink:hover {
            text-decoration: none;
            color: black;
            font-weight: 500;
        }

        .formGroup {
            background-color: white;
            width: 100%;
            height: 42rem;
            overflow-y: scroll;
        }

        .h2Edicao {
            font-size: 30px;
            font-weight: 600;
            margin-top: 1rem;
            margin-left: 1rem;
        }

        .amostraDePerfil {
            display: flex;
            align-items: center;
            width: 87%;
            background-color: #d3d3d3;
            margin-top: 2rem;
            margin-left: 2rem;
            margin-bottom: 0;
            height: 80px;
            border-radius: 20px;

        }

        .separacaoImageDeAmostra {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 2rem;
            width: 70px;
            height: 70px;
        }

        .ImagemPerfil {
            width: 60px;
            height: 60px;
            border-radius: 100%;
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

        .separacaoNomesDeAmostra {
            display: block;
            flex-direction: column;
            justify-content: center;
            align-items: start;
            height: 70px;
            margin-right: 10rem;
            padding-left: 1rem;
            padding-top: 0.5rem;
        }

        .nomePerfil {
            font-size: 15px;
        }

        .nomeUsuario {
            font-size: 12px;
        }

        .separacaoButtonDeAmostra {
            margin-right: 1rem;
            display: flex;
            align-items: center;
        }

        .ButtonAlterarImagem {
            background-color: orange;
            width: 120px;
            height: 40px;
            color: white;
            border-radius: 10px;
            font-weight: 600;
            border: none;
        }

        .ButtonAlterarImagem:hover {
            cursor: pointer;
            border: 2px solid white;
        }

        .ButtonAlterarImagem:focus {
            outline: none;
        }

        .FileIn {
            opacity: 0;
            width: 300px;
            height: 50px;
            position: absolute;
            cursor: pointer;
        }

        .FileIn:hover {
            cursor: pointer;
            border: 2px solid white;
        }

        .Form {
            margin: 1rem;
            height: 30vh;
        }

        .formGroupAlteracao {
            display: flex;
            justify-content: center;
            align-items: start;
            height: 30vh;
        }

        .FormDaAlteracao:not(.groupAddAnimais) {
            display: flex;
            align-items: start;
            flex-direction: column;
            height: 50vh;
            width: 41rem;
        }

        .groupnome {
            height: 90px;
        }

        .groupAddAnimais {
            display: flex;
            flex-direction: column;
            overflow-y: scroll;
            box-shadow: 0px 0px 8px 2px rgba(0, 0, 0, 0.2);
            background-color: #f5f5f2;
            border-radius: 10px;
            width: 10rem;
        }

        .labelAlteracao {
            font-weight: 500;
            font-size: 16px;
        }

        .spanAlteracao {
            font-size: 13px;
            margin-left: 1.5rem;
            margin-top: 0.2rem;
        }

        .groups {
            display: flex;
            align-items: start;
            margin: 0.2rem;
            width: 95%;
        }

        .groupNome {
            display: flex;
            justify-content: center;
            align-items: start;
            flex-direction: column;
            width: 50rem;
        }

        .groupNome .labelAlteracao {
            margin-left: 1.5rem;
            margin-bottom: 0;
        }

        .groupNome .InputsAlteracao {
            width: 17rem;
            margin-left: 1.2rem;
            border: none;
            background-color: #d3d3d3;
            border-radius: 10px;
            height: 30px;
            padding: 1rem;
            outline: none;
        }

        .groupPronomes {

            display: flex;
            justify-content: center;
            align-items: start;
            flex-direction: column;
            width: 50rem;
        }

        .groupPronomes .labelAlteracao {
            margin-left: 1.5rem;
            margin-bottom: 0;
        }

        .groupPronomes .InputsAlteracao {
            margin-left: 1.5rem;
            width: 17rem;
            border: none;
            background-color: #d3d3d3;
            border-radius: 10px;
            height: 30px;
            padding: 1rem;
            outline: none;
        }

        .inputSelect {
            width: 17rem;
            margin-left: 1rem;
            margin-top: 0.2rem;
            border: none;
            border-radius: 10px;
            height: 30px;
            padding: 0.1rem;
            background-color: #d3d3d3;

        }

        .groupBio {

            display: flex;
            justify-content: center;
            align-items: start;
            flex-direction: column;
            width: 60rem;
        }

        .groupBio .labelAlteracao {
            margin-left: 1.4rem;
            margin-bottom: 0;
        }

        .groupBio .InputsAlteracao {
            margin-left: 1.4rem;
            width: 37rem;
            border: none;
            background-color: #d3d3d3;
            border-radius: 10px;
            height: 30px;
            padding: 0.15rem;
            height: 70px;
            outline: none;
            resize: none;
        }

        .divisao {
            width: 100%;
            margin: 0;
            display: flex;
            align-items: start;
            justify-content: center;
            flex-direction: column;
        }

        .Nome-TipoPet {
            display: flex;
            align-items: start;
            flex-direction: row;
            margin-top: 0.3rem;
            width: 35rem;
        }

        .Nome-TipoPet .InputsAlteracao {
            margin-left: 1.2rem;
            width: 17rem;
            border: none;
            background-color: #d3d3d3;
            border-radius: 10px;
            height: 30px;
            padding: 1rem;
            outline: none;
        }

        .addAnimal {
            border-radius: 100%;
            width: 35px;
            height: 35px;
            border: none;
            font-weight: 600;
        }

        .addAnimal:hover {
            background-color: orange;
            color: white;
        }

        .addAnimal:focus {
            outline: none;
        }

        .Nome-TipoPet .InputsAlteracao option {
            color: black;
        }

        .btnSubmit {
            display: flex;
            justify-content: center;
            align-items: end;
            width: 80%;
            margin-top: 3rem;
            margin-left: 2rem;
        }

        .btnEnviar {
            width: 15rem;
            display: flex;
            background-color: orange;
            color: white;
            height: 3.3em;
            border-radius: 10px;
            border: none;
            font-size: 17px;
            font-weight: 600;
        }

        .btnEnviar:hover {
            transition: 3s
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

        .imagemSelecionada {
            width: 100%;
            height: 100%;
        }

        .aondeSelecionar {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 70%;
        }

        .botoesManeiros {
            margin-top: 2rem;
        }

        .divBotoesManeiros1 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .divBotoesManeiros2 {
            margin-top: 1.5rem;
            display: flex;
            align-items: end;
            justify-content: end;
        }

        .FormDadosPessoais {
            background-color: white;
            width: 100%;
            height: 42rem;
            overflow-y: scroll;
            display: none;
        }

        .FormAlterarSenha {
            background-color: white;
            width: 100%;
            height: 42rem;
            overflow-y: scroll;
            display: none;
        }

        .DadosPessoais {
            width: 80%;
            padding: 0.3rem;
            background-color: #d3d3d3;
            border-radius: 10px;
            border: none;
            margin-top: 0;
        }

        .DadosPessoais:focus {
            outline: none;
        }

        .DadosPessoais[type=submit] {
            background-color: orange;
            width: 15rem;
            display: flex;
            background-color: orange;
            color: white;
            height: 3.3em;
            border-radius: 10px;
            border: none;
            font-size: 17px;
            font-weight: 600;
        }

        .itensDados {
            margin-right: 2rem;
            margin-left: 2rem;
            display: flex;
            flex-direction: column;
        }

        .nomeDado {
            display: flex;
            flex-direction: column;
            width: 50%;
        }

        .sobrenomeDado {
            width: 50%;
            display: flex;
            flex-direction: column;
            margin-left: 2rem;
        }

        .NomeESobre {
            margin-left: 2rem;
            margin-right: 8rem;
            display: flex;
            flex-direction: row;
        }

        .labelForm {
            margin-bottom: 0;
            margin-top: 1rem;
        }

        .btnAbrirMenu {
            margin-left: 5%;
            width: 40px;
            height: 40px;
            border-radius: 100%;
            border: none;
            background-color: #d3d3d3;
            display: none;
        }

        .btnAbrirMenu:focus {
            outline: none;
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
                width: 100%;
                display: none;
                top: 0;
                right: 0;
                bottom: 0;
            }

            .col2-2 {
                display: flex;
                width: 10%;
                top: 0;
                right: 0;
            }

            .col2-3 {
                background-color: white;
                display: block;
                position: fixed;
                height: 100%;
                left: 0;
                bottom: 0;
                top: 0;
            }

            .formGroup {
                max-width: 100%;

            }

            .amostraDePerfil {
                width: 55%;
                margin-left: 0;
            }

            .formGroupAlteracao {
                position: fixed;
                right: 0;
                justify-content: start;
                margin: 0;
            }

            .FormDaAlteracao {
                padding-left: 15%;
                margin: 0;
            }

            .groups {
                flex-direction: column
            }

            .groupBio {
                margin-top: 3rem;
                m
            }

            .groupBio .InputsAlteracao {
                width: 33rem;
            }

            .btnAbrirMenu {
                margin-left: 5%;
                width: 40px;
                height: 40px;
                border-radius: 100%;
                border: none;
                background-color: #d3d3d3;
                display: none;
            }

            .btnAbrirMenu:focus {
                outline: none;
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
                            <a href="profile.php?tipoPost=geral&query=<?php echo $idUsuario ?>" class="nav-link"><img
                                    src="<?php echo isset($_SESSION['imagem_Default']) ? $_SESSION['imagem_Default'] : 'upload/profileNotImage.jpeg' ?>"
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
                                    <button class="btnMenuMais"><input style="cursor:pointer" class="logout"
                                            type="submit" name="btnSair" value="Sair"></button>

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
                    <div class="col1-3">
                        <menu class="menuConfigu" id="menuConfigFechar">
                            <ul class="flex-column">
                                <p class="pMenuConfig">Edição de Perfil</p>
                                <li class="navItem" id="editarPerfil">
                                    <a href="#" class="navLink">Editar</a>
                                </li>
                                <li class="navItem">
                                    <a href="#" class="navLink">Notificações</a>
                                </li>
                                <p class="pMenuConfig">Informações Pessoais</p>
                                <li class="navItem" id="dadosPessoais">
                                    <a href="#" class="navLink">Dados</a>
                                </li>
                                <li class="navItem" id="senha">
                                    <a href="#" class="navLink">Senha</a>
                                </li>
                            </ul>
                        </menu>
                    </div>
                    <div class="divConfigMobile">
                        <menu class="menuConfigu">
                            <h2 class="h2Config">Configurações</h2>
                            <ul class="flex-column">
                                <p class="pMenuConfig">Edição de Perfil</p>
                                <li class="navItem" id="editarPerfil">
                                    <a href="#" class="navLink">Editar</a>
                                </li>
                                <li class="navItem">
                                    <a href="#" class="navLink">Notificações</a>
                                </li>
                                <p class="pMenuConfig">Informações Pessoais</p>
                                <li class="navItem" id="dadosPessoais">
                                    <a href="#" class="navLink">Dados</a>
                                </li>
                                <li class="navItem" id="senha">
                                    <a href="#" class="navLink">Senha</a>
                                </li>
                            </ul>
                        </menu>
                    </div>
                </div>
            </div>
            <div class="col2">
                <div class="col2-2">
                    <div class="col2-3">
                        <div class="botaoParaMobile"><button class="btnAbrirMenu"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    class="bi bi-list" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                                </svg></button></div>
                        <div class="formGroup">
                            <h2 class="h2Edicao">Edição de Perfil</h2>
                            <div class="amostraDePerfil">
                                <div class="separacaoImageDeAmostra">
                                    <!-- Aonde vai ser adicionado a imagem do usuário -->
                                    <img src="<?php echo isset($_SESSION['imagem_Default']) ? $_SESSION['imagem_Default'] : 'upload/profileNotImage.jpeg'; ?>"
                                        alt="" class="ImagemPerfil">
                                </div>
                                <div class="separacaoNomesDeAmostra">
                                    <div class="h3Nome">
                                        <h3 class="nomePerfil"><?php echo "$nomeConta" ?>
                                        </h3>
                                    </div>
                                    <h3 class="nomeUsuario"><?php echo "@" . $nomePerfil ?></h3>
                                </div>
                                <div class="separacaoButtonDeAmostra">
                                    <button class="ButtonAlterarImagem" id="ativarJanelaModal">Alterar Foto</button>
                                </div>
                            </div>
                            <Form class="Form" action="../Controller/editarDados.php" method="post">
                                <div class="formGroupAlteracao">
                                    <div class="FormDaAlteracao">

                                        <div class="groups groupnome">
                                            <div class="groupNome">
                                                <label class="labelAlteracao">Nome exibido </label>
                                                <input type="text" class="InputsAlteracao" name="nomeConta"
                                                    value="<?= $nomeConta; ?>">

                                            </div>
                                            <div class="groupPronomes">
                                                <label class="labelAlteracao">Pronomes </label>
                                                <input type="text" class="InputsAlteracao" name="pronomeUser"
                                                    value="<?= $pronome; ?>">
                                                <span class="spanAlteracao">Seu pronome, porém não é obrigatório</span>
                                            </div>
                                        </div>

                                        <div class="groups">
                                            <div class="groupBio">
                                                <label class="labelAlteracao">Bio</label>
                                                <textarea class="InputsAlteracao" cols="4" rows="4"
                                                    name="bioUser"><?php echo "$bioUser" ?></textarea>
                                            </div>
                                        </div>
                                        <div class="btnSubmit">
                                            <input type="submit" name="AlterarDados" class="btnEnviar"
                                                value="Salvar Edições">
                                        </div>
                                    </div>
                                </div>
                            </Form>
                        </div>
                        <div class="FormDadosPessoais">
                            <h2 class="h2Edicao">Dados Pessoais</h2>
                            <form action="../controller/dadosPessoais.php" method="post">
                                <div class="divDadosPessoais">
                                    <div class="NomeESobre">
                                        <div class="nomeDado">
                                            <label class="labelForm">Nome</label>
                                            <input type="text" name="nomedousuario" class="DadosPessoais"
                                                value="<?php echo htmlspecialchars($_SESSION['nome']) ?>">
                                        </div>
                                        <div class="sobrenomeDado">
                                            <label class="labelForm">Sobrenome</label>
                                            <input type="text" name="sobrenomedousuario" class="DadosPessoais"
                                                value="<?php echo htmlspecialchars($_SESSION['sobrenome']) ?>">
                                        </div>
                                    </div>
                                    <div class="itensDados">
                                        <label class="labelForm">Nome de Usuário</label>
                                        <input type="text" name="nomedeconta" class="DadosPessoais"
                                            value="<?php echo htmlspecialchars($nomePerfil) ?>">
                                    </div>
                                    <div class="itensDados">
                                        <label class="labelForm">Email</label>
                                        <input type="text" name="emaildousuario" class="DadosPessoais"
                                            value="<?php echo htmlspecialchars($_SESSION['email']) ?>">
                                    </div>
                                    <div class="itensDados">
                                        <label class="labelForm">Número</label>
                                        <input type="text" name="numerousuario" class="DadosPessoais"
                                            value="<?php echo htmlspecialchars($_SESSION['numero']) ?>">
                                    </div>
                                    <div class="btnSubmit">
                                        <input type="submit" class="DadosPessoais" value="Salvar">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="FormAlterarSenha">
                            <h2 class="h2Edicao">Alterar Senha</h2>
                            <form action="../controller/alterarSenha.php" method="post">
                                <div class="divDadosPessoais">
                                    <div class="itensDados">
                                        <label class="labelForm">Senha Atual</label>
                                        <input type="password" name="currentPassword" id="senhaAtual"
                                            class="DadosPessoais">
                                    </div>
                                    <div class="itensDados">
                                        <label class="labelForm">Confirmar Senha</label>
                                        <input type="password" id="confirmarSenha" class="DadosPessoais">
                                    </div>
                                    <div class="itensDados">
                                        <label class="labelForm">Nova Senha</label>
                                        <input type="password" name="newPassword" id="novaSenha" class="DadosPessoais">
                                    </div>
                                    <div class="btnSubmit">
                                        <button type="submit" id="btnSalvarSenha" class="DadosPessoais"
                                            value="Salvar">Meu deus</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="corpoTodo">
            <div class="recortarImagem">
                <div class="dentroRecortar">
                    <button class="fecharRecortar" id="fecharJanelaModal"><svg xmlns="http://www.w3.org/2000/svg"
                            width="30" height="30" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                        </svg></button>
                    <div class="imagemSelecionada">
                        <h6 style="font-size:20px">Editar Imagem</h6>
                        <div class="aondeSelecionar" id="previewContainer">
                        </div>
                        <div class="botoesManeiros">
                            <form action="../Controller/uploadImagem.php" method="post" enctype="multipart/form-data">
                                <div class="divBotoesManeiros1">
                                    <input type="file" name="arquivo" class="FileIn" id="fileInput"
                                        accept="image/jpg, image/JPG, image/jpeg, image/png"><button
                                        class="ButtonAlterarImagem" id="fileButton"
                                        style="width: 300px; height: 50px">Escolher
                                        Imagem</button>
                                </div>
                                <div class="divBotoesManeiros2"><input class="ButtonAlterarImagem" type="submit"
                                        value="Salvar" name="AlterarImagem"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script src="arquivoJs/scriptConfig.js"></script>
        <script type="module" src="arquivoJs/scriptPesquisar.js"></script>
        <script src="arquivoJs/scriptAbrirMais.js"></script>
    </body>

    </html>