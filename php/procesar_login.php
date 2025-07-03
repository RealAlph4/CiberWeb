<?php
session_start();
include 'conex.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_usuario = $_POST['nombre_usuario'];
    $password = md5($_POST['password']); //encripta la contraseña ingresada para compararla

    $sql = "SELECT * FROM usuarios WHERE nombre_usuario = ? AND password = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nombre_usuario, $password]);
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario) {
        // guarda datos del usuario en la sesion
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['nombre_usuario'] = $usuario['nombre_usuario'];
        $_SESSION['rol'] = $usuario['rol'];

        // redirige al inicioo
        header("Location: index.php");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>