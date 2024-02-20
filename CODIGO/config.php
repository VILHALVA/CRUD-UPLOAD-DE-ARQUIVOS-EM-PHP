<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "UPLOAD";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
