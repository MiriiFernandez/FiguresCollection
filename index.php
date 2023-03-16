<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio</title>
  <link rel="stylesheet" href="./css/main.css" />
</head>

<body>
  <header>
    <!-- LOGO -->
    <picture>
      <source srcset="
        ../assets/img/desktop/logoDesk.webp 1x,
        ../assets/img/desktop/logoDesk@2x.webp 2x" media="(min-width:320px) and (orientation:portrait)">

      <source srcset="
        ../assets/img/desktop/logoDesk.webp 1x,
        ../assets/img/desktop/logoDesk@2x.webp 2x" media="(min-width:1000px)">

      <img src="" alt="logo" class="navbar_logo">
    </picture>


    <!-- NAVBAR SMARTPHONE-->
    <nav class="navbar">
      <a href="index.html" class="enlace_inicio"><img src="./assets/img/svg/icon_home.svg" alt="" /></a>
      <a href="descubrir.html" class="enlace_descubrir"><img src="./assets/img/svg/icon_discover.svg" alt="" /></a>
      <a href="mi_lista.html" class="enlace_lista"><img src="./assets/img/svg/icon_list.svg" alt="" /></a>
      <a href="login.html" class="enlace_login"><img src="./assets/img/svg/icon_user.svg" alt="" /></a>
    </nav>

    <!-- NAVBAR DESKTOP-->
    <nav class="navbar_desktop">
      <ul class="navbar_listado">
        <li><a href="descubrir.html" class="enlace_descubrir"><b>Descubrir</a></b> </li>
        <li><a href="proximamente.html" class="enlace_prox"> <b> Proximamente</a></b>
        <li>
        <li><a href="novedades.html" class="enlaces_novd"><b>Novedades</a></b></li>
        <li><a href="mi_lista.html" class="enlace_milista"><b>Mi lista</a></b></li>
        <li><a href="login.php" class="enlace_login"><img src="./assets/img/svg/icon_user.svg" alt="" /></a></li>
        <?php
        session_start();
        $emailUsuario = $_SESSION['email'];
        echo "<p>$emailUsuario</p>";

        ?>
        <li><a href="datos_usuario.php" class=""><img src="assets/img/svg/icon_gear.svg" width="50px" alt="" /></a></li>
      </ul>
    </nav>

  </header>

  <!-- BANNER -->
  <div class="banner">
    <section class="contenido_banner">
      <section class="banner_texto">
        <h3 class="titulo_banner_novedades">ENCUENTRA TUS FIGURAS</h3>
        <p class="subtitulo_banner_novedades">Averigua su precio actual! <br>
          o guárdate las que deseas comprar para <br> añadirlas a tu colección!</p>
      </section>
    </section>
    <a href="novedades.html"> <button class="btn"> Novedades</button></a>
  </div>
  <!-- CATEGORIAS -->
  <section class="categorias">
    <a href="marvel.html"><img src="assets/img/smartphone/marvel.webp" alt="" /></a>
    <a href="dc.html"><img src="assets/img/smartphone/dc.webp" alt="" /></a>
    <a href="starwars.html"><img src="assets/img/smartphone/starwars.webp" alt="" /></a>
  </section>
  <main class="banner_secundarios">
    <section class="descubrir">
      <a href="descubrir.html"><button class="btn">Descubrir</button></a>
    </section>



    <!-- PROXIMAMENTE -->
    <section class="proximamente">
      <a href="proximamente.html"><button class="btn">Proximamente</button></a>
    </section>
  </main>
  <br><br>
  <!-- FOOTER -->
  <footer>
    <!-- Terminos y Copy -->
    <section class="info">
      <section class="terminos">
        <ul>
          <b>
            <li><a href="terminos.html">Política y Privacidad</a></li>
            <li><a href="terminos.html">Terminos y Condiciones</a></li>
            <li class="copy">Copyright © 2023 derechos reservados a CF</li>
        </ul>
        </b>
        <section class="rdds">
          <section class="rdds_usuario">
            <p class="usuario_rdds">@figureCollection</p>
          </section>
          <section class="rdds_iconos">
            <img src="assets/img/desktop/icon_twitter.png" alt="">
            <img src="assets/img/desktop/icon_instagram.png" alt="">
            <img src="assets/img/desktop/icon_facebook.png" alt="">
          </section>
        </section>
      </section>
    </section>
    <!-- contacto -->
    <section class="contacto">
      <b> <a href="contacto.html">Contáctanos!</b>
      <img src="./assets/img/svg/icon_mssg.svg" alt="" />
      </a>
    </section>
  </footer>
</body>

</html>