<?php
$servername = "localhost";
$username = "root";
$password = "0505Leon";
$dbname = "prueba";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>