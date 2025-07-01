<?php
// Incluir el archivo de conexión
include 'conex.php';

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Comprobar si la base de datos y la tabla existen, si no, crearla
    try {
        // Verificar si la base de datos "ciberweb" existe
        $sql_create_db = "CREATE DATABASE IF NOT EXISTS ciberweb";
        $pdo->exec($sql_create_db); // Ejecutar la creación de la base de datos si no existe
        
        // Verificar si la tabla "contactos" existe, si no, crearla
        $sql_create_table = "
            CREATE TABLE IF NOT EXISTS contactos (
                id INT AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                mensaje TEXT NOT NULL,
                fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ";
        $pdo->exec($sql_create_table); // Ejecutar la creación de la tabla si no existe
    } catch (PDOException $e) {
        die("Error al crear la base de datos o la tabla: " . $e->getMessage());
    }

    // Preparar la consulta SQL para insertar los datos en la tabla contactos
    $sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES (:nombre, :email, :mensaje)";
    $stmt = $pdo->prepare($sql);

    // Vincular los parámetros
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mensaje', $mensaje);

    // Ejecutar la consulta y verificar si fue exitosa
    if ($stmt->execute()) {
        // Mostrar mensaje de éxito y redirigir después de 5 segundos
        echo "
        <script>
            alert('Gracias por tu mensaje. Hemos recibido tu información.');
            window.location.href = 'index.php';

        </script>";
    } else {
        // Mostrar mensaje de error
        echo "<p>Hubo un error al enviar tu mensaje. Por favor, intenta nuevamente.</p>";
    }
}
?>
