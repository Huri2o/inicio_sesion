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
    <!-- Encabezado -->
    <header>
        <div class="container">
            <div class="logo">Komi</div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="#">Guide</a></li>
                    <li><a href="#">Assistant</a></li>
                    <li><a href="#">Wiki</a></li>
                </ul>
            </nav>
            <div class="user-actions">
                <span>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</span>
                <a href="#" class="cart">🛒 <span class="cart-count">2</span></a>
                <a href="logout.php" class="logout">Cerrar sesión</a>
            </div>
        </div>
    </header>
    
    <!-- Sección Hero -->
    <section class="hero">
        <div class="content">
            <h1>We <em>Know</em> About <em>Food</em>: <br> <strong>Delicious And Made For You.</strong></h1>
            <p>Discover unique recipes, healthy dishes, personalized diet plans, and complete ingredient information. Eating well has never been easier.</p>
            <a href="#" class="cta-button">Order once</a>
        </div>
    </section>
    
    <!-- Sección de Servicios -->
    <section class="services">
        <div class="service">
            <h3>Market</h3>
            <p>Looking for a specific product? We have it.</p>
        </div>
        <div class="service">
            <h3>Weekly Plans</h3>
            <p>Your diet will be fabulous thanks to our experts.</p>
        </div>
        <div class="service">
            <h3>Meal Kits</h3>
            <p>Want to try something new? Our special kits are for you.</p>
        </div>
        <div class="service">
            <h3>Wiki</h3>
            <p>Calories, recipes or tips for any dish or ingredient? BINGO.</p>
        </div>
    </section>
</body>
</html>