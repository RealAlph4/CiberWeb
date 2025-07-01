// Este archivo contiene la función para cargar componentes HTML en el DOM
// La función cargarComponente toma dos parámetros:
// 1. idElemento: el id del elemento en el que se cargará el componente
// 2. rutaArchivo: la ruta del archivo HTML que se cargará
// La función utiliza fetch para obtener el contenido del archivo HTML
// y luego lo inserta en el elemento con el id especificado
function cargarComponente(idElemento, rutaArchivo) {
    fetch(rutaArchivo)
        .then(respuesta => respuesta.text())
        .then(data => {
            document.getElementById(idElemento).innerHTML = data;
        })
        .catch(error => console.error('Error al cargar el componente:', error));
}
// Cargar los componentes al cargar la página
// Se ejecuta cuando el DOM está completamente cargado
// Esto asegura que los elementos a los que se les asignará el contenido ya existan en el DOM
// Se utiliza 'DOMContentLoaded' para asegurarse de que el DOM esté completamente cargado antes de ejecutar el código
document.addEventListener('DOMContentLoaded', () => {
    cargarComponente('header', 'componentes/header.html');
    cargarComponente('navbar', 'componentes/navbar.html');
    cargarComponente('footer', 'componentes/footer.html');
});
