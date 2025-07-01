<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equipo | CiberWeb</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css"/>
</head>

<body>

  <?php include 'componentes/header.php'; ?>
  <?php include 'componentes/navbar.php'; ?>

  <main class="container my-5">
    <section class="text-center">
      <h2>Nuestro Equipo</h2>
      <p>Conoce a los increíbles profesionales que forman parte de CiberWeb.</p>

      <div id="equipo-container" class="row mt-4"></div>
    </section>
  </main>

  <?php include 'componentes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/componentes.js"></script>
  <script src="js/equipo.js"></script>

</body>
</html>
