<?php
// Incluir el archivo de conexión
include 'conex.php';

// Verificar si se ha pasado un ID de contacto en la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta SQL para eliminar el contacto
    $sql = "DELETE FROM contactos WHERE id = ?";
    $stmt = $pdo->prepare($sql);  // Usar $pdo en lugar de $conn

    // Verificar si la preparación de la consulta fue exitosa
    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $pdo->errorInfo()[2]);
    }

    // Ejecutar la consulta con el parámetro
    $execute = $stmt->execute([$id]);

    // Verificar si la ejecución fue exitosa
    if ($execute) {
        // Redirigir a la página de contactos después de eliminar
        header("Location: listar_contactos.php");
        exit();
    } else {
        echo "Hubo un error al eliminar el contacto.";
    }

} else {
    echo "ID de contacto no proporcionado.";
}
?>
