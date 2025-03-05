<?php
include '../bd/conexao.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nomeCad = $_POST['nome'];
    $sobrenomeCad = $_POST['sobrenome'];
    $usernameCad = $_POST['nomeUsername'];
    $emailCad = $_POST['email'];
    $senhaCad = $_POST['senha'];
    $celularCad = $_POST['celular'];
    $dataCad = $_POST['dataNasc'];
    $cidadeCad = $_POST['cidade'];
    $estadoCad = $_POST['estado'];
    $politicas = $_POST['situacao'];
    function gerarIdAleatorio($nomeCad, $sobrenomeCad)
    {
        $nomeCad = strtolower(str_replace('', '', $nomeCad));
        $sobrenomeCad = strtolower(str_replace('', '', $sobrenomeCad));
        $idBase = $nomeCad . $sobrenomeCad;
        $numerosAleatorios = rand(100, 999);
        $idAleatorio = $idBase . $numerosAleatorios;
        return $idAleatorio;
    }
    $nomeConta = gerarIdAleatorio($nomeCad, $sobrenomeCad);

    $sql = "INSERT INTO usuarios(nome, sobrenome, nomeUsuario, nomeConta,email,  senha, numero, dataNasc, cidade, estado, politicas)VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conexao->prepare($sql)) {
        $stmt->bind_param("sssssssssss", $nomeCad, $sobrenomeCad, $usernameCad, $nomeConta,$emailCad, $senhaCad, $celularCad, $dataCad, $cidadeCad, $estadoCad, $politicas);

        if ($stmt->execute()) {
            echo "Funcionou dados enviados com sucesso";
            header("Location: ../View/index3.html");
        } else {
            echo "os dados não foram enviados com sucesso";
        }

    } else {
        echo "erro na preparação de envio";
    }

}