<?php
// Incluir a conexão com o banco de dados
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obter os dados do formulário
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Preparar o SQL para inserir os dados
    $sql = "INSERT INTO feedbacks (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);

    echo json_encode(['status' => 'success']);
}
?>
