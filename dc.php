<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DC</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <header>
      <!-- LOGO -->
      <picture>
        <source srcset="
        assets/img/desktop/logoDesk.webp 1x,
        assets/img/desktop/logoDesk@2x.webp 2x"
        media="(min-width:320px) and (orientation:portrait)">

        <source srcset="
        assets/img/desktop/logoDesk.webp 1x,
        assets/img/desktop/logoDesk@2x.webp 2x"
        media="(min-width:1000px)" >

        <img src="" alt="logo" class="navbar_logo">
      </picture>


      <!-- NAVBAR SMARTPHONE-->
      <nav class="navbar">
        <a href="index.html" class="enlace_inicio"><img src="./assets/img/svg/icon_home.svg" alt="" /></a>
        <a href="descubrir.html" class="enlace_descubrir"><img src="./assets/img/svg/icon_discover.svg" alt="" /></a>
        <a href="mi_lista.html" class="enlace_lista"><img src="./assets/img/svg/icon_list.svg" alt="" /></a>
        <a href="login.php" class="enlace_login"><img src="./assets/img/svg/icon_user.svg" alt="" /></a>
        <li><a href="datos_usuario.html" class="enlace_login"><img src="./assets/img/svg/icon_gear.svg" width="50px" alt="" /></a></li>  
      </nav>

      <!-- NAVBAR DESKTOP-->
      <nav class="navbar_desktop">
        <ul class="navbar_listado">
          <li><a href="descubrir.php" class="enlace_descubrir"><b>Descubrir</a></b> </li>
          <li><a href="proximamente.php" class="enlace_prox"> <b> Proximamente</a></b><li>
          <li><a href="novedades.php" class="enlaces_novd"><b>Novedades</a></b></li>
          <li><a href="mi_lista.html" class="enlace_milista"><b>Mi lista</a></b></li>
          <li><a href="login.php" class="enlace_login"><img src="./assets/img/svg/icon_user.svg" alt="" /></a></li>
          <?php
        session_start();
        if (isset($_SESSION['email'])) {
          $emailUsuario = $_SESSION['email'];
          echo "<p>$emailUsuario</p>";
        }
        
        ?>
          <li><a href="datos_usuario.html" class=""><img src="./assets/img/svg/icon_gear.svg" width="50px" alt="" /></a></li>  
        </ul>
      </nav>

    </header>
    <!-- MAIN -->
    <main class="fondo_categorias">
    <!-- BANNER CON TITULO -->
    <section class="Banner_dc">
      <h4 class="titulo_categoria">DC</h4>
      <img src="assets/img/desktop/titulo_bannerDC.png" alt="">
    </section>
    <!-- CARDS DE FIGURAS -->
    <section class="card_figuras">
      <!-- Primera Card  -->
      <figure class="card">
        <a href="visualizacion_figuras/visualizar_superman.php">
        <picture class="figuras_novedades">
          <source
            srcset="
            assets/img/smartphone/superman.webp    1x,
            assets/img/smartphone/superman@2x.webp 2x
            "
          />
          <img class="" src="" alt="superman" />
        </picture>
      </a>
        <figcaption class="titulo_figura">
            Hot Toys DC Justice League Henry Cavill SUPERMAN
        </figcaption>
        <figcaption class="precio_figura">550 €</figcaption>
        <section class="lista_añadir">
          <picture class="heart_icon">
            <source
              srcset="
              assets/img/smartphone/heart.webp    1x,
              assets/img/smartphone/heart@2x.webp 2x
              "
            />
            <img class="" src="" alt="heart" />
          </picture>
          <picture class="crown_icon">
            <source
              srcset="
                assets/img/smartphone/crown.webp    1x,
                assets/img/smartphone/crown@2x.webp 2x
              "
            />
            <img class="" src="" alt="heart" />
          </picture>
          <picture class="share_icon">
            <source
              srcset="
                assets/img/smartphone/share.webp    1x,
                assets/img/smartphone/share@2x.webp 2x
              "
            />
            <img class="" src="" alt="heart" />
          </picture>
        </section>
      </figure>
    <!-- NAVBAR -->
    <nav class="navbar">
      <a href="index.html"><img src="./assets/img/svg/icon_home.svg" alt="" /></a>  
      <a href="descubrir.html"><img src="./assets/img/svg/icon_discover.svg" alt="" /></a>
      <a href="mi_lista.html"></a>  <img src="./assets/img/svg/icon_list.svg" alt="" />
      <a href="login.html"><img src="./assets/img/svg/icon_user.svg" alt="" /></a>
    </nav>
      <!-- Segunda Card  -->
      <figure class="card">
        <a href="visualizacion_figuras/visualiazar_joker.php">
        <picture class="figuras_novedades">
          <source
            srcset="
              assets/img/smartphone/joker.webp    1x,
              assets/img/smartphone/joker@2x.webp 2x
            "
          />
          <img class="" src="" alt="joker" />
        </picture>
      </a>
        <figcaption class="titulo_figura">Hot Toys DC: THE JOKER Escala 1/4</figcaption>
        <figcaption class="precio_figura">505 €</figcaption>
        <section class="lista_añadir">
          <picture class="heart_icon">
            <source
              srcset="
                assets/img/smartphone/heart.webp    1x,
                assets/img/smartphone/heart@2x.webp 2x
              "
            />
            <img class="" src="" alt="heart" />
          </picture>
          <picture class="crown_icon">
            <source
              srcset="
                assets/img/smartphone/crown.webp    1x,
                assets/img/smartphone/crown@2x.webp 2x
              "
            />
            <img class="" src="" alt="heart" />
          </picture>
          <picture class="share_icon">
            <source
              srcset="
                assets/img/smartphone/share.webp    1x,
                assets/img/smartphone/share@2x.webp 2x
              "
            />
            <img class="" src="" alt="heart" />
          </picture>
        </section>
      </figure>

      <!-- Tercera Card  -->
      <figure class="card">
        <a href="visualizacion_figuras/visualizar_flash.php">
        <picture>
          <source
            srcset="
            assets/img/smartphone/flash.webp    1x,
            assets/img/smartphone/flash@2x.webp 2x
            "
          />
          <img class="" src="" alt="flash" />
        </picture>
        </a>
        <figcaption class="titulo_figura">
            Hot Toys Television Series: DC - THE FLASH
        </figcaption>
        <figcaption class="precio_figura">250 €</figcaption>
        <section class="lista_añadir">
          <picture class="heart_icon">
            <source
              srcset="
              assets/img/smartphone/heart.webp    1x,
              assets/img/smartphone/heart@2x.webp 2x
              "
            />
            <img class="" src="" alt="heart" />
          </picture>
          <picture class="crown_icon">
            <source
              srcset="
                assets/img/smartphone/crown.webp    1x,
                assets/img/smartphone/crown@2x.webp 2x
              "
            />
            <img class="" src="" alt="heart" />
          </picture>
          <picture class="share_icon">
            <source
              srcset="
                assets/img/smartphone/share.webp    1x,
                assets/img/smartphone/share@2x.webp 2x
              "
            />
            <img class="" src="" alt="heart" />
          </picture>
        </section>
      </figure>
    </section>
    </main>
    <!-- FOOTER -->
    <footer>
      <!-- Terminos y Copy -->
      <section class="terminos">
      <ul>
        <b>
        <li><a href="">Política y Privacidad</a></li>
        <li><a href="">Terminos y Condiciones</a></li>
        <li class="copy">Copyright © 2023 derechos reservados a CF</li>
      </ul>
    </b>
  </section>
      <!-- contacto -->
      <section class="contacto">
        <b> <a href="contacto.html"
          >Contáctanos!</b>
          <img src="assets/img/svg/icon_mssg.svg" alt="" />
        </a>
      </section>
    </footer>
  </body>
</html>