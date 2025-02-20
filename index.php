<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Komi</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <form action="login.php" method="POST">
            <div class="form-group">
                <input type="text" name="usuario" placeholder="Usuario" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            <button type="submit">Ingresar</button>
        </form>
        <?php
        session_start();
        if(isset($_SESSION['error'])) {
            echo '<div class="error-message">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']);
        }
        ?>
    </div>
</body>
</html>adelanteadelnate