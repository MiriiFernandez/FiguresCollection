document.getElementById("formulario").addEventListener("submit", function (e) {
  e.preventDefault();

  let formulario = new FormData(document.getElementById("formulario"));

  fetch("ControladorRegistro.php", {
    method: "POST",
    body: formulario,
  })
    .then((res) => res.json())
    .then((data) => {
      if (data == "true") {
         document.getElementById("nombre").value = "";
         document.getElementById("email").value = "";
         document.getElementById("password").value = "";
         document.getElementById("password_repeat").value = "";
        mostrarInfo(data);
      } else {
        mostrarInfo(data);
      }
    });
});

function mostrarInfo(data) {
  if (data) {
    imprimirError("¡Usuario registrado correctamente!");
  } else {
    imprimirError("¡Ups! Parece que hubo un error, revise los campos o puede ser que ya estes registrado!");
  }
}

function imprimirError(error) {
  let parrafo = document.getElementById("mensaje");
  if (error === "") {
    parrafo.style.color = "green";
    parrafo.style.textTransform = "uppercase";
  } else {
    parrafo.innerHTML = error;
    parrafo.style.color = "red";
    parrafo.style.textTransform = "uppercase";
    parrafo.style.backgroundColor = "black";
  }
}
