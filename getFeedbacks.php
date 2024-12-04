<?php
// Incluir a conexão com o banco de dados
include 'db.php';

// Buscar os feedbacks do banco de dados
$sql = "SELECT * FROM feedbacks ORDER BY id DESC";
$stmt = $pdo->query($sql);
$feedbacks = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($feedbacks);
?>
