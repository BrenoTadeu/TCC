<?php 
include "../bd/conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    $iddouser = $_SESSION['id_usuarios'] ?? 0;
    $query = $_POST['idDousuario'] ?? 0;
    $action = $_POST['action'] ?? '';

    if (!$iddouser || !$query || !$action) {
        echo json_encode([
            "status" => "error",
            "message" => "Dados inválidos ou incompletos."
        ]);
        exit;
    }

    if ($action === 'seguir') {
        $sqlInsert = "INSERT INTO seguidores (usuarioId, seguindoId) VALUES (?, ?)";
        $stmt = $conexao->prepare($sqlInsert);
        $stmt->bind_param('ii', $iddouser, $query);

        if ($stmt->execute()) {
            echo json_encode([
                "status" => "success",
                "message" => "Usuário seguido com sucesso.",
                "isFollowing" => true
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Erro ao seguir o usuário."
            ]);
        }
        $stmt->close();
    } else if ($action === 'deixar_de_seguir') {
        $sqlDelete = "DELETE FROM seguidores WHERE usuarioId = ? AND seguindoId = ?";
        $stmt = $conexao->prepare($sqlDelete);
        $stmt->bind_param('ii', $iddouser, $query);

        if ($stmt->execute()) {
            echo json_encode([
                "status" => "success",
                "message" => "Usuário deixou de ser seguido.",
                "isFollowing" => false
            ]);
        } else {
            echo json_encode([
                "status" => "error",
                "message" => "Erro ao deixar de seguir o usuário."
            ]);
        }
        $stmt->close();
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Ação inválida."
        ]);
    }
} else {
    echo json_encode([
        "status" => "error",
        "message" => "Método não permitido."
    ]);
}

?>