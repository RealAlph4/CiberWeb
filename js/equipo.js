// Esperamos a que el DOM esté completamente cargado
document.addEventListener('DOMContentLoaded', () => {
    const contenedorEquipo = document.getElementById('equipo-container');

    // Usamos Fetch para obtener usuarios falsos de la API randomuser.me
    fetch('https://randomuser.me/api/?results=6&nat=mx,es,us') // Puedes ajustar el número de resultados
        .then(response => response.json())
        .then(data => {
            data.results.forEach(usuario => {
                // Creamos una tarjeta para cada miembro del equipo
                const card = document.createElement('div');
                card.classList.add('col-md-4', 'mb-4');

                card.innerHTML = `
                    <div class="card h-100 shadow-sm">
                        <img src="${usuario.picture.large}" class="card-img-top" alt="Foto de ${usuario.name.first}">
                        <div class="card-body">
                            <h5 class="card-title">${usuario.name.first} ${usuario.name.last}</h5>
                            <p class="card-text">
                                Email: ${usuario.email}<br>
                                País: ${usuario.location.country}
                            </p>
                        </div>
                    </div>
                `;

                // Agregamos cada tarjeta al contenedor
                contenedorEquipo.appendChild(card);
            });
        })
        .catch(error => {
            console.error('Error al cargar el equipo:', error);
            contenedorEquipo.innerHTML = `<p class="text-danger">No se pudo cargar el equipo en este momento.</p>`;
        });
});
