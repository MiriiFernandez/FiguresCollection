<?php
session_start();

include 'conexion.php';
$pdo = new Conexion();

// Obtener el email de la sesión
$email_sesion = $_SESSION['email'];

// Obtener la nueva contraseña
$nueva_contrasena = $_POST['cambiar_password'];

if (isset($_SESSION['email'])) {

    //ACTUALIZAR EL CAMPO DE PASSWORD
    if (isset($_POST['enviar_nuevaPassword'])) {
        $sql = $pdo->prepare("UPDATE usuarios SET password=:nueva_contrasena WHERE email=:email_sesion");
        $sql->bindValue(':nueva_contrasena', $nueva_contrasena);
        $sql->bindValue(':email_sesion', $email_sesion);
        $sql->execute();

        // Comprobar si la actualización se realizó correctamente
        if ($sql->rowCount() > 0) {
            echo "Se actualizó el campo correctamente";
        } else {
            echo "No se pudo actualizar el campo";
        }
    }

}
