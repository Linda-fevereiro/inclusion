<?php
$host = 'localhost'; // Ou seu servidor de banco de dados
$dbname = 'feedbackDB';
$username = 'root'; // Seu usuário do MySQL
$password = ''; // Sua senha do MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro na conexão: ' . $e->getMessage();
}
?>
