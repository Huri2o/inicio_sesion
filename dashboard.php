<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Komi</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <style>
        /* Para que la imagen se ajuste al contenedor */
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        /* Para asegurar que el contenedor ocupe toda la pantalla */
        .container, .container-fluid {
            min-height: 100vh;
            width: 100%;
            padding: 15px;
        }

        /* Si usas una imagen de fondo */
        body {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <header class="header">
            <div class="logo">
            </div>
            <nav class="nav-menu">
                <a href="#home">Home</a>
                <a href="#menu">Menu</a>
                <a href="#guide">Guide</a>
                <a href="#assistant">Assistant</a>
                <a href="#wiki">Wiki</a>
            </nav>
            <div class="user-menu">
                <span>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
                <a href="logout.php" class="btn">Cerrar sesión</a>
            </div>
        </header>
    </div>
</body>

</html>