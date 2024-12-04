<?php
// Incluir a conexão com o banco de dados
include 'db.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Incrementar os likes
    $sql = "UPDATE feedbacks SET likes = likes + 1 WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);

    echo json_encode(['status' => 'success']);
}
?>

