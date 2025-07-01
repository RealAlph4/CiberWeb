<?php
// Parámetros de conexión a la base de datos
$servername = "localhost";  // Cambia esto si tu servidor MySQL está en otro host
$username = "root";         // Cambia si tu usuario es diferente
$password = "";             // Cambia si tienes una contraseña
$dbname = "ciberweb";       // Nombre de la base de datos

try {
    // Crear una nueva conexión PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establecer el modo de error a excepción para manejo de errores
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En caso de error en la conexión
    echo "Error al conectar: " . $e->getMessage();
}
?>
