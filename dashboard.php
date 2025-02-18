<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komi - Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
</body>
</html>
