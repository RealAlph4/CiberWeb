<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Inicia la sesión solo si no está iniciada
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="quienes-somos.php">Quiénes Somos</a></li>
          <li class="nav-item"><a class="nav-link" href="historia.php">Historia</a></li>
          <li class="nav-item"><a class="nav-link" href="equipo.php">Equipo</a></li>
          <li class="nav-item"><a class="nav-link" href="contacto.php">Contacto</a></li>
          
          <?php if (isset($_SESSION['usuario_id'])): ?>
            <li class="nav-item"><a class="nav-link" href="listar_contactos.php"><b>Contactos Registrados</b></a></li>
          <?php endif; ?>
        </ul>
        
        <ul class="navbar-nav ms-auto">
            <?php if (isset($_SESSION['usuario_id'])): ?>
                <li class="nav-item"><a class="nav-link" href="#">Hola, <?php echo htmlspecialchars($_SESSION['nombre_usuario']); ?></a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Cerrar Sesión</a></li>
            <?php else: ?>
                <li class="nav-item"><a class="nav-link" href="login.php">Iniciar Sesión</a></li>
                <li class="nav-item"><a class="nav-link" href="registro.php">Registrarse</a></li>
            <?php endif; ?>
        </ul>
      </div>
    </div>
</nav>