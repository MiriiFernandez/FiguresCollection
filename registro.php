<?php
include './php/conexion.php';

$pdo = new Conexion();

// $nombre = $_POST["nombre"];
// $email = $_POST["email"];
// $contraseña = $_POST["contraseña"];

if (isset($_POST['enviar'])) {

  $password_encrypted = hash('sha256', $_POST["contraseña"]);
  $_POST["contraseña"] = $password_encrypted;

  $sql = "INSERT INTO registros (nombre, email, contraseña) VALUES (:nombre, :email, :contraseña)";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':nombre', $_POST["nombre"]);
  $stmt->bindValue(':email', $_POST["email"]);
  $stmt->bindValue(':contraseña', $_POST["contraseña"]);
  $stmt->execute();
  $idPost = $pdo->lastInsertId();
  if ($idPost) {
    header("HTTP/1.1 200 Ok");
    exit;
  }
} else {
  echo "error al registrarse";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro</title>
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>
  <section class="container_registro">
    <!-- LOGO -->
    <section class="logo_login">
      <picture>
        <source srcset="
              assets/img/smartphone/logofc.webp    1x,
              assets/img/smartphone/logofc@2x.webp 2x
            " />
        <img class="" src="" alt="logo" />
      </picture>
    </section>
    <h4 class="titulo_crearcuenta">CREAR UNA CUENTA</h4>
    <!-- FORMULARIO -->
    <section class="registro_form">
      <form action="" class="registro_formulario">
        <input type="text" placeholder="Nombre" name="nombre" id="nombre" />
        <input type="email" placeholder="Email" name="email" id="email" />
        <input type="password" placeholder="Contraseña" name="contraseña" id="contraseña" />
        <input type="password" placeholder="Repetir Contraseña" name="repeticion_contraseña" id="repeticion_contraseña" />
        <!-- BTN -->
        <button class="registro_btn" type="submit" name="enviar" onclick="formulario()"><a href="#">Registrarte</a></button>
      </form>
      <p id="mensaje"></p>
    </section>
    <!-- Registro -->
    <b>
      <a class="link_tologin" href="login.html">¡Ya tengo cuenta!</a>
    </b>
  </section>

  <!-- JS -->
  <script src="./js/formulario.js"></script>
</body>

</html>