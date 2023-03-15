document.getElementById('formulario').addEventListener('submit', function(e) {
    
  e.preventDefault();

  let formulario = new FormData(document.getElementById('formulario'));

  fetch('./Controlador/ControladorRegistro.php', {
      method: 'POST',
      body: formulario
  })
  .then(res => res.json())
  .then(data => {
      if(data == 'true') {
          document.getElementById('nombre').value = '';
          document.getElementById('email').value = '';
          document.getElementById('contrasena').value = '';
          alert('El usuario se insertó correctamente.');
      } else {
          console.log(data);
      }
  });

});






// function imprimirError(error) {
//   if (error === "") {
//     parrafo.innerHTML = "registro con exito";     
//     parrafo.style.color = "green";     
//     parrafo.style.textTransform = "uppercase";
//   } else {
//     parrafo.innerHTML = error;
//     parrafo.style.color = "red";
//     parrafo.style.textTransform = "uppercase";
//   }
// }
