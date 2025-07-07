// Esperamos que la pagina este lista.
document.addEventListener('DOMContentLoaded', () => {

    // Guardamos los elementos que vamos a usar.
    const formulario = document.querySelector('form');
    const nombreInput = document.getElementById('nombre');
    const emailInput = document.getElementById('email');
    const mensajeInput = document.getElementById('mensaje');
    const botonEnviar = document.querySelector('button[type="submit"]');

    // --- Funciones ---

    // Valida que el formulario este correcto.
    const validarFormulario = () => {
        const errores = [];

        if (nombreInput.value.trim().length < 2) {
            errores.push("El nombre es muy corto.");
        }
        // Revisa si el email parece valido.
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value.trim())) {
            errores.push("El correo no parece valido.");
        }
        if (mensajeInput.value.trim().length < 5) {
            errores.push("El mensaje es muy corto.");
        }

        // Si hay errores, los muestra.
        if (errores.length > 0) {
            alert("Errores:\n" + errores.join("\n"));
            return false; // Frena el envio.
        }

        return true; // Todo en orden.
    };

    // Resalta el campo del formulario.
    const resaltarCampo = (elemento, clase) => {
        elemento.classList.add(clase);
    };

    // Cambia el estilo del boton.
    const cambiarEstiloBoton = (boton, colorFondo, colorTexto) => {
        boton.style.backgroundColor = colorFondo;
        boton.style.color = colorTexto;
        boton.style.borderColor = colorFondo;
    };


    // --- Eventos ---

    // Al intentar enviar el formulario.
    formulario.addEventListener('submit', function(evento) {
        if (validarFormulario()) {
            // Si todo esta bien, avisa y envia.
            alert('Formulario enviado con exito!');
        } else {
            // Si hay errores, no lo envia.
            evento.preventDefault();
        }
    });

    // Al hacer clic en el campo del nombre.
    nombreInput.addEventListener('focus', function() {
        // 'this' es el input del nombre.
        resaltarCampo(this, 'input-resaltado');
    });

    // Cuando el mouse pasa sobre el boton.
    botonEnviar.addEventListener('mouseover', function() {
        // 'this' es el boton.
        cambiarEstiloBoton(this, '#198754', '#ffffff');
    });

    // Cuando el mouse sale del boton.
    botonEnviar.addEventListener('mouseout', function() {
        // Vuelve al color original.
        cambiarEstiloBoton(this, '#0d6efd', '#ffffff');
    });

});