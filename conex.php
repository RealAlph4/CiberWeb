<?php
//conexión a la base de datos
$servername = "mysql.inf.uct.cl";
$username = "msolisdeovando"; 
$password = "kW(Z0]dt4Adt4p3N";
$dbname = "A2023_msolisdeovando"; // Nombre de la base de datos

try {
    // Crear una nueva conexión PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En caso de error en la conexión
    echo "Error al conectar: " . $e->getMessage();
}
?>
