<?php
session_start();
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email-username'];
    $password = $_POST['password'];

    $sql = "SELECT id, first_name, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $first_name, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $first_name;
            echo "<script>alert('Inicio de sesión exitoso.'); window.location='index.php';</script>";
        } else {
            echo "<script>alert('Contraseña incorrecta.');</script>";
        }
    } else {
        echo "<script>alert('Usuario no encontrado.');</script>";
    }
    
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Komi - Inicio de Sesión</title>
  <link rel="stylesheet" href="../assets/css/inicio.css" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="logo">
    <img src="../assets/images/homepage_img/logo4-removebg-preview.png" alt="Logo Komi">
    <span>Komi</span>
  </div>
  <div class="background-image">
    <img src="../assets/images/inicio_img/background.jpg" alt="Fondo de la página"> 
  </div>

  <!-- Contenedor principal -->
  <div class="container">
    <div class="card">
      <h2>Welcome to <span>KOMI</span></h2>
      <h3>Sign in</h3>

      <!-- 🔹 FORMULARIO CORREGIDO -->
      <form action="inicio.php" method="POST">
        <label for="email-username">Enter your username or email address</label>
        <input type="text" id="email-username" name="email-username" placeholder="Username or Email" required />

        <label for="password">Enter your Password</label>
        <input type="password" id="password" name="password" placeholder="********" required />

        <a class="forgot-password" href="#">Forgot your password?</a>

        <button type="submit" class="btn-submit">Sign in</button>
      </form>

      <p class="continue-text">Or continue with</p>
      <div class="social-buttons">
        <button class="social-btn facebook">Facebook</button>
        <button class="social-btn twitter">Twitter</button>
        <button class="social-btn google">Google</button>
      </div>

      <p class="login-text">Don't have an account? <a href="registro.php">Sign up</a></p>
    </div>
  </div>

</body>
</html>
