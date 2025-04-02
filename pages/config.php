<?php
$host = "localhost";
$user = "root";
$password = "carlos12";
$database = "komi_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
