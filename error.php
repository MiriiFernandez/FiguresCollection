<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Errores</title>
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

    $cod_error = $_GET['cod_error'];

    switch ($cod_error) {
      case '10':
        echo "<b><h4>FALLO AL INICIAR SESIÓN, CORREO NO REGISTRADO</h4></b>";
        break;
      case '20':
        echo "¡NO PUEDES CERRAR UNA SESIÓN SINO TIENES UNA!";
        break;
      case '30':
        echo "'Parece que ese correo ya esta registrado!";
        break;
      case '40':
        echo "<b><h4>¡NO HAY UNA SESIÓN INICIADA!</h4></b>";
        break;
      case '50':
        echo "<b><h4>¡PARECE QUE NO SE PUDO ACTUALIZAR LA CONTRASEÑA, REVISE QUE NO SEA LA ACTUAL!</h4></b>";
        break;
      case '60':
        echo "<b><h4>¡PARECE QUE NO SE PUDO ACTUALIZAR EL CORREO!</h4></b>";
        break;
      case '70':
        echo "<b><h4>¡ESTE CORREO ES ÉL ACTUAL!</h4></b>";
        break;
      default:
        echo "Ups parece que hubo un fallo";
        break;
    }

    ?>

  </section>
</body>

</html>