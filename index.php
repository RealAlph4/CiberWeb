<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>CiberWeb | Soluciones Digitales</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

  <?php include 'componentes/header.php'; ?>
  <?php include 'componentes/navbar.php'; ?>

  <!-- Cuadro con texto -->
  <section class="bg-primary text-white text-center py-5">
    <div class="container">
      <h1 class="display-4 fw-bold">Impulsamos tu mundo digital</h1>
      <p class="lead">Desarrollamos soluciones innovadoras para llevar tu negocio al siguiente nivel</p>
    </div>
  </section>

  <!-- Lo que hacemos -->
  <section class="py-5 bg-light text-center">
  <div class="container">
    <h2 class="mb-4">¿Qué hacemos?</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <img src="img/desarrollo-web.jpg" alt="Desarrollo Web" class="img-fluid rounded mb-3 shadow">
        <h5>Desarrollo Web</h5>
        <p>Webs modernas, responsivas y optimizadas para todos los dispositivos.</p>
      </div>
      <div class="col-md-4">
        <img src="img/cloud.jpg" alt="Soluciones Cloud" class="img-fluid rounded mb-3 shadow">
        <h5>Soluciones Cloud</h5>
        <p>Implementamos servicios en la nube seguros y escalables.</p>
      </div>
      <div class="col-md-4">
        <img src="img/ciberseguridad.jpg" alt="Ciberseguridad" class="img-fluid rounded mb-3 shadow">
        <h5>Ciberseguridad</h5>
        <p>Protegemos tu negocio con tecnología de defensa digital avanzada.</p>
      </div>
    </div>
  </div>
 </section>


  <!-- Servicios Destacados -->
  <section class="py-5 text-center">
  <div class="container">
    <h2 class="mb-4">Nuestros Servicios</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="img/consultoria.png" class="card-img-top" alt="Consultoría TI">
          <div class="card-body">
            <h5 class="card-title">Consultoría TI</h5>
            <p class="card-text">Te asesoramos en transformación digital, infraestructura y software empresarial.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="img/diseño.png" class="card-img-top" alt="Diseño UX/UI">
          <div class="card-body">
            <h5 class="card-title">Diseño UX/UI</h5>
            <p class="card-text">Diseños centrados en el usuario para experiencias atractivas y efectivas.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="img/fullstack.png" class="card-img-top" alt="Desarrollo Full Stack">
          <div class="card-body">
            <h5 class="card-title">Desarrollo Full Stack</h5>
            <p class="card-text">Aplicaciones completas con tecnologías actualizadas y rendimiento óptimo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <?php include 'componentes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
