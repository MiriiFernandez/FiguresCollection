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

      <form id="formulario" method="POST" class="registro_formulario">
        <input type="text" placeholder="Nombre" name="nombre" id="nombre" />
        <input type="email" placeholder="Email" name="email" id="email" />
        <input type="password" placeholder="Contraseña" name="password" id="password" />
        <input type="password" placeholder="Repetir Contraseña" name="password_repeat" id="password_repeat" />
        <!-- BTN -->
        <input class="registro_btn" type="submit" value="Enviar" name="enviar">
      </form>

      <div id="mensaje"></div>
    </section>
    <!-- Registro -->
    <b>
      <a class="link_tologin" href="login.php">¡Ya tengo cuenta!</a>
    </b>
  </section>

  <!-- JS -->
  <script src="./js/prueba.js"></script>

  <?php
  // include 'ControladorRegistro.php';
  // $ctrRegistro = new ControladorRegistro();
  // $ctrRegistro->registrarse();


  ?>
</body>

</html>