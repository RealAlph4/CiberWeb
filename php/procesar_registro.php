<?php
include 'conex.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_usuario = $_POST['nombre_usuario'];
    $email = $_POST['email'];
    // contraseña usando MD5
    $password = md5($_POST['password']); 

    // todos los nuevos usuarios tendrán el rol 'usuario'
    $rol = 'usuario'; 

    try {
        $sql = "INSERT INTO usuarios (nombre_usuario, email, password, rol) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nombre_usuario, $email, $password, $rol]);

        echo "Usuario registrado con éxito. Ahora puedes iniciar sesión.";
        // eedirige a la pagina de login
        header("refresh:3;url=login.php");

    } catch (PDOException $e) {
        //  si el usuario o email ya existe = error
        echo "Error al registrar el usuario: " . $e->getMessage();
    }
}
?>