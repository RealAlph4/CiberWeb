<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Formulario de Contacto | CiberWeb</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

  <!-- Header y Navbar cargados -->
  <?php include 'componentes/header.php'; ?>
  <?php include 'componentes/navbar.php'; ?>

  <main class="container my-5">
    <section class="text-center">
      <h2>Contáctanos!</h2>
      
      <!-- Formulario de contacto -->
      <form action="procesar_contacto.php" method="POST">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="mensaje" class="form-label">Mensaje</label>
          <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </section>
  </main>

  <!-- Scripts, Bootstrap y carga componentes -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/interacciones.js"></script> </body>
</body>
<footer class="bg-dark text-white text-center py-3">
  <div class="container">
      &copy; Todos los derechos reservados
  </div>
</footer>
</html>
