// FORMULARIO REGISTRO
"use strict";

//Objeto mensaje
var parrafo = document.getElementById("mensaje");

//Estados de los campos
var nombreEstado = true;
var emailEstado = true;
var passwdEstado = true;
var reppasswdEstado = true;

var mensaje = "";

//Invocar al pulsar el botón
function formulario() {
  nombreEstado = validarNombre();
  emailEstado = validarEmail();
  passwdEstado = validarContraseña();
  reppasswdEstado = validarRepeticionContraseña();

  if (nombreEstado !== true) {
    mensaje += nombreEstado + " ";
  }
  if (emailEstado !== true) {
    mensaje += emailEstado + " ";
  }
  if (passwdEstado !== true) {
    mensaje += passwdEstado + " ";
  }
  if (reppasswdEstado !== true) {
    mensaje += reppasswdEstado + " ";
  }

  mostrarMensaje();
}

//Mostrar mensaje de validación
function mostrarMensaje() {
  if (mensaje === "") {
    parrafo.innerHTML = "registro con exito";
    parrafo.style.color = "green";
    parrafo.style.textTransform = "uppercase";
  } else {
    parrafo.innerHTML = mensaje;
    parrafo.style.color = "red";
  }
}

//Validar Nombre
function validarNombre() {
  var inputName = document.getElementById("nombre");
  var nombre = inputName.value;

  //nombre no puede estar vacio
  if (nombre == "") {
    return "Nombre no puede estar vacio";
  }

  //nombre no contenga número
  const expReg = /^[a-zA-Z\s]+$/;
  if (!expReg.test(nombre)) {
    return "El nombre no puede contener números";
  }

  return nombreEstado;
}

//Validar Email
function validarEmail() {
  var inputEmail = document.getElementById("email");
  var email = inputEmail.value;

  //Email no puede estar vacio
  if (email == "") {
    return "email no puede estar vacio";
  }

  //Validar email
  let emailRegex = /\S+@\S+\.\S+/;
  if (!emailRegex.test(email)) {
    return "El email introducido no es valido";
  }

  return emailEstado;
}

//Validar Contraseña
function validarContraseña() {
  var inputPasswd = document.getElementById("contraseña");
  var passwd = inputPasswd.value;

  //Passwd no puede estar vacio
  if (passwd == "") {
    return "Contraseña no puede estar vacio";
  }

  //Passwd longitud tiene que ser mínimo de 8 caracteres
  if (passwd.length < 8) {
    return "La contraseña debe tener un mínimo de 8 caracteres";
  }

  return passwdEstado;
}

//Validar Repetición Contraseña
function validarRepeticionContraseña() {
  var inputRepPasswd = document.getElementById("repeticion_contraseña");
  var repepasswd = inputRepPasswd.value;
  var inputPasswd = document.getElementById("contraseña");
  var passwd = inputPasswd.value;

  //Repe passwd no puede estar vacio
  if (repepasswd == "") {
    return "Se tiene que confirmar la contraseña";
  }

  //Las contraseñas deben coincidir
  if (repepasswd != passwd) {
    return "Las contraseñas no coinciden!";
  }

  return reppasswdEstado;
}
