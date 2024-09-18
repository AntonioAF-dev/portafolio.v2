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

// Selecciona el checkbox del interruptor
const themeSwitchCheckbox = document.getElementById('theme-switch-checkbox');

// Verifica si hay un tema guardado en el almacenamiento local
const currentTheme = localStorage.getItem('theme');

// Si hay un tema guardado, aplícalo
if (currentTheme) {
    document.body.classList.add(currentTheme);
    themeSwitchCheckbox.checked = currentTheme === 'night';
}

// Escucha el evento de cambio en el checkbox
themeSwitchCheckbox.addEventListener('change', () => {
    // Si el checkbox está activado, aplica el tema nocturno
    if (themeSwitchCheckbox.checked) {
        document.body.classList.add('night');
        document.body.classList.remove('day');
        localStorage.setItem('theme', 'night'); // Guarda el tema nocturno en el almacenamiento local
    } else {
        document.body.classList.add('day');
        document.body.classList.remove('night');
        localStorage.setItem('theme', 'day'); // Guarda el tema diurno en el almacenamiento local
    }
});


function actualizarHora() {
    const ahora = new Date();
    const horas = ahora.getHours().toString().padStart(2, '0');
    const minutos = ahora.getMinutes().toString().padStart(2, '0');
    const segundos = ahora.getSeconds().toString().padStart(2, '0');
    document.getElementById('hora').textContent = `${horas}:${minutos}:${segundos}`;
}

// Actualiza la hora cada segundo
setInterval(actualizarHora, 1000);

// Llama a la función para mostrar la hora al cargar la página
actualizarHora();