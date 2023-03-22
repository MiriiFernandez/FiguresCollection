<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proximamente</title>
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
        <a href="index.php" class="enlace_inicio"><img src="./assets/img/svg/icon_home.svg" alt="" /></a>
        <a href="descubrir.php" class="enlace_descubrir"><img src="./assets/img/svg/icon_discover.svg" alt="" /></a>
        <a href="mi_lista.html" class="enlace_lista"><img src="./assets/img/svg/icon_list.svg" alt="" /></a>
        <a href="login.php" class="enlace_login"><img src="./assets/img/svg/icon_user.svg" alt="" /></a>
        <li><a href="datos_usuario.php" class="enlace_login"><img src="./assets/img/svg/icon_gear.svg" width="50px" alt="" /></a></li>  
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
    <section class="Banner_proximamente">
      <h4 class="titulo_proximamente">Proximamente</h4>
    </section>
    <!-- CARDS DE FIGURAS -->
    <section class="card_figuras">
      <!-- Primera Card  -->
      <figure class="card">
        <a href="visualizacion_figuras/visualizar_darthvader.php">
            <picture class="figuras_novedades">
                <source
                  srcset="
                    assets/img/smartphone/DarthVader.webp    1x,
                    assets/img/smartphone/DarthVader@2x.webp 2x
                  "
                />
                <img class="" src="" alt="darthvader" />
              </picture>
      </a>
        <figcaption class="titulo_figura">
            Hot Toys - DARTH VADER STAR WARS OBI-WAN KENOBI
        </figcaption>
        <figcaption class="precio_figura">370€</figcaption>
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
        <a href="visualizacion_figuras/visualizar_blackadam.php">
          <picture class="figuras_novedades">
            <source
              srcset="
                assets/img/smartphone/blackAdam.webp    1x,
                assets/img/smartphone/blackAdam@2x.webp 2x
              "
            />
            <img class="" src="" alt="blackAdam" />
          </picture>
      </a>
        <figcaption class="titulo_figura">Hot Toys - BLACK ADAM (DELUXE VERSION)</figcaption>
        <figcaption class="precio_figura">385€ </figcaption>
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
        <a href="visualizacion_figuras/visualizar_deadstrange.php">
        <picture>
          <source
            srcset="
              assets/img/smartphone/DeadStrange.webp    1x,
              assets/img/smartphone/DeadStrange@2x.webp 2x
            "
          />
          <img class="" src="" alt="DeadStrange" />
        </picture>
        </a>
        <figcaption class="titulo_figura">
            Hot Toys - DEAD STRANGE
        </figcaption>
        <figcaption class="precio_figura">440 €</figcaption>
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
