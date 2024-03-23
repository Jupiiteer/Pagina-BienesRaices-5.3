document.addEventListener("DOMContentLoaded", () => {
  events();
});

function events() {
  mobileMenu();
  darkMode();
}

function darkMode() {
  const preferencia = window.matchMedia("(prefers-color-scheme: dark)");
  if (preferencia.matches) {
    document.body.classList.add("dark-mode");
  } else {
    document.body.classList.remove("dark-mode");
  }

  preferencia.addEventListener("change", () => {
    if (preferencia.matches) {
      document.body.classList.add("dark-mode");
    } else {
      document.body.classList.remove("dark-mode");
    }
  });

  const botonDarkMode = document.querySelector(".dark-mode-boton");
  botonDarkMode.addEventListener("click", () => {
    if (document.body.classList.contains("dark-mode")) {
      document.body.classList.remove("dark-mode");
    } else {
      document.body.classList.add("dark-mode");
    }
  });
}

function mobileMenu() {
  const mobileMenu = document.querySelector(".mobile-menu");
  mobileMenu.addEventListener("click", () => {
    const navegacion = document.querySelector(".navegacion");
    if (navegacion.classList.contains("mostrar")) {
      navegacion.classList.remove("mostrar");
    } else {
      navegacion.classList.add("mostrar");
    }
  });

  // Muestra campos condicionales
  const metodoContacto = document.querySelectorAll(
    'input[name="contacto[contacto]"]'
  );
  metodoContacto.forEach((input) =>
    input.addEventListener("click", mostrarMetodosContacto)
  );
}

function mostrarMetodosContacto(e) {
  const contactoDiv = document.querySelector("#contacto");
  if ((e.target.value = "telefono")) {
    contactoDiv.innerHTML = `
          <label for="telefono">Teléfono:</label>
          <input name="contacto[telefono]" type="tel" id="telefono" placeholder="Tu Teléfono">
          <p>Elija la fecha y la hora para la llamada</p>
          <label for="fecha">Fecha:</label>
          <input name="contacto[fecha]" type="date" id="fecha">
          <label for="hora">Hora:</label>
          <input name="contacto[hora]" type="time" id="hora" min="09:00" max="18:00">
        `;
  } else {
    contactoDiv.innerHTML = `
      <label for="email">E-mail: </label>
      <input name="contacto[email]" type="email" id="email" placeholder="Tu Correo electrónico" required>
    `;
  }
}
