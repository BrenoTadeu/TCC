<?php

$servidor = 'localhost';
//colocar o seu usuario
$usuario = '';
//colocar sua senha
$senha = "";

$banco = "acheipet";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    echo "deu erro" or die("error" . $conexao->connect_error);
}
