function openWhatsApp() {
    var phoneNumber = "938859291"; // Reemplaza con el número de teléfono deseado, con el código del país sin el signo +
    var message = "Hola, deseo cotizar una página web...";
    var url = "https://api.whatsapp.com/send?phone=" + phoneNumber + "&text=" + encodeURIComponent(message);

    window.open(url, "_blank");
}

window.onscroll = function () {
    var logoNombre = document.getElementById("logo-nombre");
    var navbarContainer = document.getElementById("navbar-container");

    if (window.pageYOffset > 50) {
        logoNombre.style.opacity = "0";
        navbarContainer.style.top = "0";
    } else {
        logoNombre.style.opacity = "1";
        navbarContainer.style.top = "auto";
    }
};

// script.js

// Almacena el botón y el cuerpo del documento
const toggleButton = document.getElementById('theme-toggle');
const body = document.body;

// Función para cambiar entre modos
toggleButton.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    body.classList.toggle('light-mode');

    // Cambia el icono del botón
    if (body.classList.contains('dark-mode')) {
        toggleButton.textContent = '☀️';
    } else {
        toggleButton.textContent = '🌙';
    }

    // Almacena el modo en localStorage para recordar la preferencia del usuario
    localStorage.setItem('theme', body.className);
});

// Aplica el tema guardado en localStorage al cargar la página
const savedTheme = localStorage.getItem('theme');
if (savedTheme) {
    body.className = savedTheme;

    // Ajusta el icono del botón según el tema cargado
    if (body.classList.contains('dark-mode')) {
        toggleButton.textContent = '☀️';
    }
}
