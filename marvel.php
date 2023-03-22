<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Marvel</title>
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <header>
      <!-- LOGO -->
      <picture>
        <source srcset="
        ../assets/img/desktop/logoDesk.webp 1x,
        ../assets/img/desktop/logoDesk@2x.webp 2x"
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
          <li><a href="datos_usuario.php" class=""><img src="./assets/img/svg/icon_gear.svg" width="50px" alt="" /></a></li>  
        </ul>
      </nav>

    </header>
    <!-- MAIN -->
    <main class="fondo_categorias">
    <!-- BANNER CON TITULO -->
    <section class="Banner_marvel">
      <h4 class="titulo_categoria">MARVEL</h4>
      <img src="assets/img/desktop/titulo_bannerMarvel.png" alt="">
    </section>
    <!-- CARDS DE FIGURAS -->
    <section class="card_figuras">
      <!-- Primera Card  -->
      <figure class="card">
        <a href="visualizacion_figuras/visualizar_ironman.php">
        <picture class="figuras_novedades">
          <source
            srcset="
              assets/img/smartphone/IronMan.webp    1x,
              assets/img/smartphone/IronMan@2x.webp 2x
            "
          />
          <img class="" src="" alt="IronMan" />
        </picture>
      </a>
        <figcaption class="titulo_figura">
            Hot Toys Iron Man 2 Tony Stark Mark V Suit Up Version Deluxe
        </figcaption>
        <figcaption class="precio_figura">395 €</figcaption>
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
    
      <!-- Segunda Card  -->
      <figure class="card">
        <a href="visualizacion_figuras/visualizar_spiderman.php">
        <picture class="figuras_novedades">
          <source
            srcset="
              assets/img/smartphone/SpidermanMiles.webp    1x,
              assets/img/smartphone/SpidermanMiles@2x.webp 2x
            "
          />
          <img class="" src="" alt="SpidermanMiles" />
        </picture>
      </a>
        <figcaption class="titulo_figura">Hot Toys Marvel: Spiderman - Miles Morales con Spider Cat Escala 1/6</figcaption>
        <figcaption class="precio_figura">280 €</figcaption>
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
        <a href="visualizacion_figuras/visualizar_moon.php">
        <picture>
          <source
            srcset="
            assets/img/smartphone/MoonKnight.webp    1x,
            assets/img/smartphone/MoonKnight@2x.webp 2x
            "
          />
          <img class="" src="" alt="MoonKnight" />
        </picture>
        </a>
        <figcaption class="titulo_figura">
            Hot Toys Television Masterpiece Series: Marvel - Moon Knight Escala 1/6
        </figcaption>
        <figcaption class="precio_figura">335 €</figcaption>
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
        <li><a href="terminos.html">Política y Privacidad</a></li>
        <li><a href="terminos.html">Terminos y Condiciones</a></li>
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