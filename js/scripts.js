// scripts.js

// Animación de scroll suave cuando se hace clic en un enlace de navegación
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Código adicional para funcionalidades específicas de la página
function toggleAlert(alertId) {
    var alertElement = document.getElementById(alertId);
    if (alertElement.style.display === 'none' || alertElement.style.display === '') {
        alertElement.style.display = 'block';
    } else {
        alertElement.style.display = 'none';
    }
}
