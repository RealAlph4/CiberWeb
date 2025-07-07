<?php
session_start();
// Comprueba si el usuario ha iniciado sesión Y si su rol es 'admin'
if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
    // Si no es un admin, detiene la ejecucion y muestra un mensaje
    die("Acceso denegado. No tienes permisos para realizar esta acción.");
}
//(solo se ejecuta si pasa el filtro de seguridad)
include 'conex.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM contactos WHERE id = ?";
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$id])) {
        // Redirige de vuelta a la lista si la eliminación fue exitosa
        header("Location: listar_contactos.php");
        exit();
    } else {
        echo "Hubo un error al eliminar el contacto.";
    }

} else {
    echo "ID de contacto no proporcionado.";
}
?>