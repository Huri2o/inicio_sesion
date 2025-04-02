<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Komi - Inicio de Sesión</title>
  <link rel="stylesheet" href="../css/inicio.css" />
  <!-- Fuente de ejemplo -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sansita+Swashed:wght@300..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400">
</head>
<body>
  <div class="logo">
    <img src="../assets/images/registro_img/logo3.jpg" alt="Logo Komi">
    <span>Komi</span>
  </div>
  <div class="background-image">
    <img src="../assets/images/inicio_img/background.jpg" alt="Fondo de la página"> 
  </div>
  <!-- Contenedor principal -->
  <div class="container">
    <!-- Card que contendrá todo el formulario -->
    <div class="card">
      <!-- Título de Bienvenida -->
      <h2>Welcome to <span>KOMI</span></h2>
      <h3>Sign up</h3>

      <!-- Formulario -->
      <form action="#" method="POST">
        <label for="email-username">Enter your username or email address</label>
        <input type="text" id="email-username" name="email-username" placeholder="Username o Email" required />

        <div class="form-row">
          <div>
            <label for="user-name">User name</label>
            <input type="text" id="user-name" name="user-name" placeholder="User Name" required />
          </div>
          <div>
            <label for="contact">Contact Number</label>
            <input type="tel" id="contact" name="contact" placeholder="Contacto" required />
          </div>
        </div>

        <label for="password">Enter your Password</label>
        <input type="password" id="password" name="password" placeholder="********" required />

        <a class="forgot-password" href="#">Forgot your password?</a>

        <a href="D_products.html" type="submit" class="btn-submit">Sign up</a>
      </form>

      <p class="continue-text">Or continue with</p>
      <div class="social-buttons">
        <!-- Puedes reemplazar los íconos o textos por los de Facebook, Twitter, Google, etc. -->
        <button class="social-btn facebook">Facebook</button>
        <button class="social-btn twitter">Twitter</button>
        <button class="social-btn google">Google</button>
      </div>

    </div>
    <!-- Fin de la card -->
  </div>

</body>
</html>
