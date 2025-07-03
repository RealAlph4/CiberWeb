<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario | CiberWeb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'componentes/header.php'; ?>
    <?php include 'componentes/navbar.php'; ?>

    <main class="container my-5">
        <div class="form-container">
            <div class="form-box">
                <h2 class="text-center mb-4">Registro de Nuevo Usuario</h2>
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
                        <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>

                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    
    <?php include 'componentes/footer.php'; ?>
</body>
</html>