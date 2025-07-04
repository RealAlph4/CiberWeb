<?php
// Parámetros de conexión a la base de datos
$servername = "mysql.inf.uct.cl";  // Cambia esto si tu servidor MySQL está en otro host
$username = "msolisdeovando";         // Cambia si tu usuario es diferente
$password = "kW(Z0]dt4Adt4p3N";             // Cambia si tienes una contraseña
$dbname = "A2023_msolisdeovando";       // Nombre de la base de datos

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
