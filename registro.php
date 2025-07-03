<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro de Usuario | CiberWeb</title>
    </head>
<body>
    <?php include 'componentes/header.php'; ?>
    <?php include 'componentes/navbar.php'; ?>
    <main class="container my-5">
        <h2>Registro de Nuevo Usuario</h2>
        <form action="procesar_registro.php" method="POST">
            <div class="mb-3">
                <label for="nombre_usuario" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </main>
    <?php include 'componentes/footer.php'; ?>
</body>
</html>