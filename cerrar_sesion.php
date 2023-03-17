<?php
//Recogeremos la sesión que este actualmente
session_start();
if (isset($_SESSION['email'])) {
    // Utilizaremos session_destroy para destruir la sesión
    session_destroy();

    // Redirecciona al usuario a la pagina de inicio
    header('Location: index.php');
    exit;
} else {
    $cod_error = 20;
    header("Location: error.php?cod_error=" . $cod_error);
}
