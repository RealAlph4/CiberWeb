// Espera que el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
  const formulario = document.getElementById('contact-form');

  // Espera envio del formulario
  formulario.addEventListener('submit', function (e) {
    e.preventDefault(); // Evita recarga

    // Obtener valores y limpiar espacios
    const nombre = document.getElementById('nombre').value.trim();
    const email = document.getElementById('email').value.trim();
    const mensaje = document.getElementById('mensaje').value.trim();

    let errores = [];

    // Validación nombre
    if (nombre.length < 2) {
      errores.push("El nombre es demasiado corto.");
    } else {
      alert("Nombre ingresado correctamente.");
    }

    // Validación formato email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      errores.push("El correo no es válido.");
    } else {
      alert("Correo ingresado correctamente.");
    }

    // Validación longitud mensaje
    if (mensaje.length < 5) {
      errores.push("El mensaje debe tener al menos 5 caracteres.");
    } else {
      alert("Mensaje ingresado correctamente.");
    }

    // Mostrar errores si hay
    if (errores.length > 0) {
      alert("Errores:\n" + errores.join("\n"));
      return;
    }

    // Si todo es correcto, muestra un mensaje de éxito
    alert("¡Formulario enviado correctamente!");
    
    // Limpiar el formulario
    formulario.reset();
  });
});



