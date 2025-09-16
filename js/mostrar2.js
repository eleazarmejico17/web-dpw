document.addEventListener('DOMContentLoaded', function () {
    const text1 = document.getElementById('fondo-container-text1');
    const text2 = document.getElementById('fondo-container-text2');
    const boton1 = document.getElementById('boton1');
    const boton2 = document.getElementById('boton2');

    boton1.addEventListener('click', function () {
        text1.style.display = 'none';
        text2.style.display = 'block';
    });

    boton2.addEventListener('click', function () {
        text2.style.display = 'none';
        text1.style.display = 'block';
    });
});
