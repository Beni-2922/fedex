const btnAll = document.getElementById("btn-all");
const btnEnvio = document.getElementById("btn-envio");
const btnGestion = document.getElementById("btn-gestion");
const btnSoluciones = document.getElementById("btn-soluciones");
const btnAduana = document.getElementById("btn-aduana");
const btnRastreo = document.getElementById("btn-rastreo");
const info = document.getElementById("info");
const title = info.querySelector("h3");
const text = info.querySelector("p");

function mostrarContenido(boton, titulo, contenido) {
  // Ocultar el contenido previo y eliminar la clase 'active' de los botones
  info.style.display = "none";
  btnAll.classList.remove("active");
  btnEnvio.classList.remove("active");
  btnGestion.classList.remove("active");
  btnSoluciones.classList.remove("active");
  btnAduana.classList.remove("active");
  btnRastreo.classList.remove("active");

  // Si se hizo clic en el botón "Todos", mostrar todo el contenido
  if (boton === btnAll) {
    info.style.display = "block";
    title.textContent = "Categorías";
    text.textContent = "Para visualizar la información da clic en los botones.";
    boton.classList.add("active");
  }
  // Si se hizo clic en el botón "Herramientas de envío", mostrar contenido relacionado
  else if (boton === btnEnvio) {
    info.style.display = "block";
    title.textContent = "Herramientas de envío";
    text.innerHTML = document.getElementById("contenido-envio").innerHTML;
    boton.classList.add("active");
  }
  // Si se hizo clic en el botón "Herramientas para la gestión de cuenta", mostrar contenido relacionado
  else if (boton === btnGestion) {
    info.style.display = "block";
    title.textContent = "Herramientas para la gestión de cuenta";
    text.innerHTML = document.getElementById("contenido-gestion").innerHTML;
    boton.classList.add("active");
  } else if (boton === btnSoluciones) {
    info.style.display = "block";
    title.textContent = "Soluciones de envío integradas";
    text.innerHTML = document.getElementById("contenido-soluciones").innerHTML;
    boton.classList.add("active");
  }
  // Si se hizo clic en el botón "Herramientas de aduana", mostrar contenido relacionado
  else if (boton === btnAduana) {
    info.style.display = "block";
    title.textContent = "Herramientas de aduana";
    text.innerHTML = document.getElementById("contenido-aduana").innerHTML;
    boton.classList.add("active");
  }
  // Si se hizo clic en el botón "Herramientas de rastreo", mostrar contenido relacionado
  else if (boton === btnRastreo) {
    info.style.display = "block";
    title.textContent = "Herramientas de rastreo";
    text.innerHTML = document.getElementById("contenido-rastreo").innerHTML;
    boton.classList.add("active");
  }
}

// Mostrar todo el contenido al cargar la página
mostrarContenido(btnAll, "", "");

// Agregar el evento 'click' a cada botón
btnAll.addEventListener("click", function () {
  mostrarContenido(btnAll, "", "");
});

btnEnvio.addEventListener("click", function () {
  mostrarContenido(btnEnvio, "", "");
});

btnGestion.addEventListener("click", function () {
  mostrarContenido(btnGestion, "", "");
});

btnSoluciones.addEventListener("click", function () {
  mostrarContenido(btnSoluciones, "", "");
});

btnAduana.addEventListener("click", function () {
  mostrarContenido(btnAduana, "", "");
});

btnRastreo.addEventListener("click", function () {
  mostrarContenido(btnRastreo, "", "");
});
