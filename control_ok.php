<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OK</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <header>
    <!-- LOGO -->
    <picture>
      <source srcset="
              ../assets/img/desktop/logoDesk.webp 1x,
              ../assets/img/desktop/logoDesk@2x.webp 2x" media="(min-width:320px) and (orientation:portrait)">

      <source srcset="
              assets/img/desktop/logoDesk.webp 1x,
              assets/img/desktop/logoDesk@2x.webp 2x" media="(min-width:1000px)">

      <img src="" alt="logo" class="navbar_logo">
    </picture>


    <!-- NAVBAR SMARTPHONE-->
    <nav class="navbar">
      <a href="index.html" class="enlace_inicio"><img src="./assets/img/svg/icon_home.svg" alt="" /></a>
      <a href="descubrir.html" class="enlace_descubrir"><img src="./assets/img/svg/icon_discover.svg" alt="" /></a>
      <a href="mi_lista.html" class="enlace_lista"><img src="./assets/img/svg/icon_list.svg" alt="" /></a>
      <a href="login.php" class="enlace_login"><img src="./assets/img/svg/icon_user.svg" alt="" /></a>
    </nav>

    <!-- NAVBAR DESKTOP-->
    <nav class="navbar_desktop">
      <ul class="navbar_listado">
        <li><a href="descubrir.html" class="enlace_descubrir"><b>Descubrir</a></b> </li>
        <li><a href="proximamente.html" class="enlace_prox"> <b> Proximamente</a></b>
        <li>
        <li><a href="novedades.html" class="enlaces_novd"><b>Novedades</a></b></li>
        <li><a href="mi_lista.html" class="enlace_milista"><b>lista</a></b></li>
        <li><a href="login.php" class="enlace_login"><img src="./assets/img/svg/icon_user.svg" alt="" /></a></li>
        <li><a href="datos_usuario.html" class=""><img src="assets/img/svg/icon_gear.svg" width="50px" alt="" /></a></li>
      </ul>
    </nav>
  </header>
  <section class="cuerpo_datos">

  <?php
  session_start();

  $cod_ok = $_GET['cod_ok'];

  switch ($cod_ok) {
    case '1':
      echo "<b><h4>¡¡CONTRASEÑA ACTUALIZADA CON ÉXITO!!</h4></b>";
      break;
      case '2':
        echo "<b><h4>¡¡CORREO ACTUALIZADO CON ÉXITO!</h4></b>";
        break;
    default:
      echo "Ups parece que hubo un fallo";
      break;
  }

  ?>

  </section>
</body>

</html>