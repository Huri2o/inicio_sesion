<?php
// Primero cargamos la configuración por defecto
require_once 'config.example.php';

// Si existe una configuración local, la sobreescribe
if (file_exists('config.local.php')) {
    require_once 'config.local.php';
}

// Crear la conexión usando las variables de configuración
$conexion = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Establecer charset
mysqli_set_charset($conexion, "utf8mb4");