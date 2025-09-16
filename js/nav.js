let menuList = document.getElementById("menuList");
let overlay = document.getElementById("overlay");

menuList.style.maxHeight = "0px";

function toggleMenu() {
    if (menuList.style.maxHeight === "0px") {
        menuList.style.maxHeight = "300px"; // Muestra el menú
        overlay.style.display = "block"; // Muestra el overlay
        document.body.style.overflow = "hidden"; // Desactiva el scroll
    } else {
        closeMenu(); // Cierra el menú
    }
}

function closeMenu() {
    menuList.style.maxHeight = "0px"; // Oculta el menú
    overlay.style.display = "none"; // Oculta el overlay
    document.body.style.overflow = ""; // Restaura el scroll
}
