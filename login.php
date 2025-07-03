<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - AlbumSeeker</title>
    <link rel="stylesheet" href="/entrega2/assets/css/styles.css"> <!-- Asegúrate de que la ruta sea correcta -->
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="php/procesar_login.php" method="POST">
        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" required><br><br>

        <button type="submit">Iniciar Sesión</button>
    </form>
    <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
</body>
</html>
