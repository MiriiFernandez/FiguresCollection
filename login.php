<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <section class="container_login">
      <!-- LOGO -->
      <section class="logo_login">
        <picture>
          <source
            srcset="
              assets/img/smartphone/logofc.webp    1x,
              assets/img/smartphone/logofc@2x.webp 2x
            "
          />
          <img class="" src="" alt="logo" />
        </picture>
      </section>
      <h4 class="iniciaSesion">INICIA SESIÓN</h4>
      <!-- FORMULARIO -->
      <section class="login_form">
        <form action="">
          <input type="email" placeholder="Email" name="email" id="email" />
          <input type="password" placeholder="Contraseña" name="contrasena" id="contrasena" />
        </form>
        <!-- BTN -->
        <button class="login_btn"><a href="">Iniciar Sesión</a></button>
      </section>
      <!-- Registro -->
      <section class="registrarse">
        <b>
        <p class="frase_login">Eres un nuevo Coleccionista?</p>
        <a class="link_toregistro" href="registro.php">Regístrate!</a>
        </b>
      </section>
    </section>
    <!-- NAVBAR -->
  <nav class="navbar">
    <a href="index.html"><img src="./assets/img/svg/icon_home.svg" alt="" /></a>  
    <a href="descubrir.html"><img src="./assets/img/svg/icon_discover.svg" alt="" /></a>
    <a href="mi_lista.html"></a>  <img src="./assets/img/svg/icon_list.svg" alt="" />
    <a href="login.html"><img src="./assets/img/svg/icon_user.svg" alt="" /></a>
  </nav>
  </body>
</html>
