<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos Usuario</title>
  <link rel="stylesheet" href="./css/main.css">
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
    <section class="contianer_datos">

      <?php
      include 'conexion.php';
      $pdo = new Conexion();
      session_start();
      if (isset($_SESSION['email'])) {
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=:email");
        $sql->bindValue(':email', $_SESSION['email']);
        $sql->execute();
        $sql->setFetchMode(PDO::FETCH_ASSOC);
        header("HTTP/1.1 200 hay datos");

        $resultado = $sql->fetchAll();

        try {
          echo "<table>";
          // Mostrar resultados
          echo "<tr><th>Nombre</th><th>Correo</th><th>Contraseña</th></tr>";
          foreach ($resultado as $row) {
            echo "<tr>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["password"] . "</td>";

            echo "</tr>";
          }

          echo "</table>";
        } catch (PDOException $error) {
          echo "Error: " . $error->getMessage();
        }
      } else {
        echo "Necesitas inicar sesión";
      }


      ?>
    </section>
    <section class="botones_datos">
      <button class="modificar_boton"><a href="cambiar_password.php">Cambiar Contraseña</a></button>
      <button class="modificar_boton"><a href="cambiar_email.php">Cambiar Correo</a></button>
    </section>
    <a href="cerrar_sesion.php">Cerrar Sesión</a>
  </section>

</body>

</html>