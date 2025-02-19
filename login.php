<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
    $password = md5($_POST['password']); // Mantenemos MD5 por ahora para mantener compatibilidad con la base de datos existente

    $sql = "SELECT * FROM tabla_prueba WHERE usuario = '$usuario' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $_SESSION['usuario'] = $usuario;
            header("Location: dashboard.php");
            exit();
        } else {
            $_SESSION['error'] = "Usuario o contraseña incorrectos";
            header("Location: index.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Error en la consulta: " . $conn->error;
        header("Location: index.php");
        exit();
    }
} else {
    $_SESSION['error'] = "Método de acceso no válido";
    header("Location: index.php");
    exit();
}
?>