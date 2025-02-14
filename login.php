<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM tabla_prueba WHERE usuario = '$usuario' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        header("Location: dashboard.php");
        exit();

    } else {
        echo "<script>alert('Usuario o contraseña incorrectos.'); window.location.href='../index.html';</script>";
    }
}
?>