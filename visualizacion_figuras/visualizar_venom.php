<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Visualizar Venom</title>
    <link rel="stylesheet" href="../css/main.css" />
  </head>
  <body>
     <!-- HEADER -->
     <header>
      <!-- LOGO -->
      <picture>
        <source srcset="
        ../assets/img/desktop/logoDesk.webp 1x,
        ../assets/img/desktop/logoDesk@2x.webp 2x"
        media="(min-width:320px) and (orientation:portrait)">

        <source srcset="
        ../assets/img/desktop/logoDesk.webp 1x,
        ../assets/img/desktop/logoDesk@2x.webp 2x"
        media="(min-width:1000px)" >

        <img src="" alt="logo" class="navbar_logo">
      </picture>


      <!-- NAVBAR SMARTPHONE-->
      <nav class="navbar">
        <a href="index.php" class="enlace_inicio"><img src="../assets/img/svg/icon_home.svg" alt="" /></a>
        <a href="descubrir.php" class="enlace_descubrir"><img src="../assets/img/svg/icon_discover.svg" alt="" /></a>
        <a href="mi_lista.html" class="enlace_lista"><img src="../assets/img/svg/icon_list.svg" alt="" /></a>
        <a href="login.php" class="enlace_login"><img src="../assets/img/svg/icon_user.svg" alt="" /></a>
        <li><a href="datos_usuario.php" class="enlace_login"><img src="../assets/img/svg/icon_gear.svg" width="50px" alt="" /></a></li>  
      </nav>

      <!-- NAVBAR DESKTOP-->
      <nav class="navbar_desktop">
        <ul class="navbar_listado">
          <li><a href="../descubrir.php" class="enlace_descubrir"><b>Descubrir</a></b> </li>
          <li><a href="../proximamente.php" class="enlace_prox"> <b> Proximamente</a></b><li>
          <li><a href="../novedades.php" class="enlaces_novd"><b>Novedades</a></b></li>
          <li><a href="mi_lista.html" class="enlace_milista"><b>Mi lista</a></b></li>
          <li><a href="../login.php" class="enlace_login"><img src="../assets/img/svg/icon_user.svg" alt="" /></a></li>
          <?php
        session_start();
        if (isset($_SESSION['email'])) {
          $emailUsuario = $_SESSION['email'];
          echo "<p>$emailUsuario</p>";
        }
        
        ?>
          <li><a href="../datos_usuario.php" class=""><img src="../assets/img/svg/icon_gear.svg" width="50px" alt="" /></a></li>  
        </ul>
      </nav>

    </header>
    <!-- SECCION VISUALIZAR FIGURA -->
    <section class="container">
      <!-- CARD -->
        <section class="card_visualizar">
          <!-- PRIMERA IMAGEN -->
          <div class="carousel">
            <button class="carousel-arrow carousel-arrow-left">&#x2190</button>
            <div class="contenido">
              <div class="carousel-item">
                <picture>
                  <source srcset="
                  ../assets/img/smartphone/venom.webp 1x,
                  ../assets/img/smartphone/venom@2x.webp 2x"
                  media="(min-width:320px) and (orientation:portrait)">
          
                  <source srcset="
                  ../assets/img/smartphone/venom.webp 1x,
                  ../assets/img/smartphone/venom@2x.webp 2x"
                  media="(min-width:1000px)">
          
                  <img src="" alt="figura" class="imagen_figura">
                </picture>
              </div>

              <!-- SEGUNDA IMAGEN -->
              <div class="carousel-item">
                <picture>
                  <source srcset="
                  ../assets/img/smartphone/VenomV2.webp 1x,
                  ../assets/img/smartphone/VenomV2@2x.webp 2x"
                  media="(min-width:320px) and (orientation:portrait)">
          
                  <source srcset="
                  ../assets/img/smartphone/VenomV2.webp 1x,
                  ../assets/img/smartphone/VenomV2@2x.webp 2x"
                  media="(min-width:1000px)">
          
                  <img src="" alt="figura" class="figura">
                </picture>
              </div>

            </div>
            <button class="carousel-arrow carousel-arrow-right">&#x2192</button>
          </div>
        </section>

      <section class="info-figura">
        <!-- TITULO DE LA FIGURA -->
          <h3 class="titulo_figura_visualizar">Hot Toys - VENOM 1/6</h4>
        <!-- INFORMACION FIGURA -->
        <section class="compartir">
        <img src="../assets/img/smartphone/share.png" alt="">
      </section>
          <section class="info_figura">
            <p class="precio_figura">Precio: 530€</p>
            <p class="fecha_figura">Fecha de lanzamiento: 6 / 09 / 21 </p>
          </section>
            <section class="card_añadir">
              <!-- CARD AGREGAR FAVORITOS -->
             <img class="red_heart" src="../assets/img/smartphone/heart_red.png" alt=""> <p class="agregar__texto">Agregar a Favoritos</p>
            </section>
            <section class="card_añadir">
              <!-- CARD AGREGAR FAVORITOS -->
             <img class="crown_colecc" src="../assets/img/smartphone/crown.png" alt=""> <p class="agregar__texto">Agregar a Lista</p>
            </section>
          </section>
      <br>
        <!-- NAVBAR -->
      <nav class="navbar">
        <a href="../index.html"><img src="../assets/img/svg/icon_home.svg" alt="" /></a>  
        <a href="../novedades.html"> <img src="../assets/img/svg/icon_discover.svg" alt="" /></a> 
        <img src="../assets/img/svg/icon_list.svg" alt="" />
        <a href="../login.html"><img src="../assets/img/svg/icon_user.svg" alt="" /></a>
      </nav>
      <!-- Ver Mas -->
      <section class="ver_categoria">
        <p class="ver_categoria__texto">Ver Más</p>
      <a href="../marvel.php"><img class="ver_categoria__mas"src="../assets/img/smartphone/marvel.png" alt=""></a> 
      </section>
      <!-- FOOTER -->
    </section>
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
        <b> <a href=""
          >Contáctanos!</b>
          <img src="../assets/img/svg/icon_mssg.svg" alt="" />
        </a>
      </section>
    </footer>

    <!-- JS -->
    <script src="../js/main.js"></script>
  </body>
</html>