<?php
include('config.php'); // Asegurar la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar contraseña
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $zip = $_POST['zip'];

    $sql = "INSERT INTO users (first_name, last_name, mobile, email, password, address1, address2, city, country, zip) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssss", $first_name, $last_name, $mobile, $email, $password, $address1, $address2, $city, $country, $zip);

    if ($stmt->execute()) {
        echo "<script>alert('Registro exitoso. Ahora puedes iniciar sesión.'); window.location='inicio.php';</script>";
    } else {
        echo "<script>alert('Error en el registro.');</script>";
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro - Komi</title>
    <link href="../assets/css/registro.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="logo-section">
            <div class="logo">
                <img src="../assets/images/homepage_img/logo4-removebg-preview.png" alt="Logo Komi">
                <span>Komi</span>
            </div>
            <div class="image-container">
                <img src="../assets/images/registro_img/fondo.jpg" alt="Imagen de comida" class="food-image">
            </div>
        </div>
        
        <div class="form-section">
            <h1>Register Now!</h1>
            <p class="subtitle">to be a part of us</p>
            <p class="instruction">Fill the information carefully</p>
            
            <!-- 🔹 FORMULARIO CORREGIDO -->
            <form action="registro.php" method="POST">
                <h2>Personal Information</h2>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="first-name">First name <span class="required">*</span></label>
                        <input type="text" id="first-name" name="first-name" placeholder="Enter your first name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="last-name">Last Name <span class="required">*</span></label>
                        <input type="text" id="last-name" name="last-name" placeholder="Enter your last name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="mobile">Mobile Number <span class="required">*</span></label>
                        <input type="tel" id="mobile" name="mobile" placeholder="Enter mobile number" required>
                    </div>
                </div>
                
                <div>
                    <div class="form-group">
                        <label for="password">Password <span class="required">*</span></label>
                        <input type="password" id="password" name="password" placeholder="Enter a password" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address <span class="required">*</span></label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div> 
                </div>
                
                <div class="form-group full-width">
                    <label for="address1">Address 1</label>
                    <input type="text" id="address1" name="address1" placeholder="Enter registration code">
                </div>
                
                <div class="form-group full-width">
                    <label for="address2">Address 2</label>
                    <input type="text" id="address2" name="address2" placeholder="Enter registration code">
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" placeholder="Enter city">
                    </div>
                    
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" id="country" name="country" placeholder="Enter country">
                    </div>
                    
                    <div class="form-group">
                        <label for="zip">ZIP code</label>
                        <input type="text" id="zip" name="zip" placeholder="Enter ZIP code">
                    </div>
                </div>
                
                <div class="button-container">
                    <button type="submit" class="next-button">Next</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
