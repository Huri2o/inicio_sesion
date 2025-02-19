<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Komi</title>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    <div class="dashboard-container">
        <header class="header">
            <div class="logo">
                <img src="images/logo.svg" alt="Komi Logo">
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