<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Historia | CiberWeb</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

  <!-- Header y Navbar cargados -->
  <?php include 'componentes/header.php'; ?>
  <?php include 'componentes/navbar.php'; ?>

  <main class="container my-5">
    <section class="text-center">
      <h2>Nuestra Historia</h2>
      
      <!-- Introducción -->
      <p>Desde nuestra fundación en 2022, hemos superado retos tecnológicos y ampliado nuestro portafolio para ofrecer soluciones a clientes nacionales e internacionales.</p>
      <p>Contamos con alianzas estratégicas y un equipo multidisciplinario que nos permite innovar constantemente y adaptarnos a los cambios del mercado.</p>
      <p>Explora nuestra línea de tiempo para conocer los hitos que nos han consolidado como un referente en tecnología.</p>

      <!-- Tabla con hitos importantes -->
      <div class="table-responsive mt-4">
        <table class="table table-bordered">
          <thead class="table-white bg-primary text-white">
            <tr>
              <th>Año</th>
              <th>Hito</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2022</td>
              <td>Fundación de CiberWeb con visión de innovación tecnológica.</td>
            </tr>
            <tr>
              <td>2023</td>
              <td>Primeros contratos importantes y desarrollo de la plataforma propia.</td>
            </tr>
            <tr>
              <td>2024</td>
              <td>Expansión a mercado internacional y certificaciones de calidad obtenidas.</td>
            </tr>
            <tr>
              <td>2025</td>
              <td>Lanzamiento de nuevas soluciones basadas en inteligencia artificial.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <?php include 'componentes/footer.php'; ?>

  <!-- Scripts Bootstrap y carga componentes -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
