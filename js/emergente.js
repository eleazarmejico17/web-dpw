// Selecciona elementos
const modal = document.getElementById("miModal");
const btnCerrar = document.querySelector(".cerrar");

// Abre la ventana emergente automáticamente al cargar la página
window.addEventListener("DOMContentLoaded", function() {
    modal.style.display = "block";
    document.body.classList.add("no-scroll"); // Desactiva el scroll de la página
});

// Cierra la ventana emergente al hacer clic en la 'x'
btnCerrar.onclick = function() {
    modal.style.display = "none";
    document.body.classList.remove("no-scroll"); // Reactiva el scroll de la página
}

// Cierra la ventana emergente al hacer clic fuera del contenido
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        document.body.classList.remove("no-scroll"); // Reactiva el scroll de la página
    }
}

