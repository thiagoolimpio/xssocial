<?php
$host = "localhost";
$user = "root"; // Altere se necessário
$pass = ""; // Altere se necessário
$db = "twitter_clone";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
