<?php
session_start();

include 'conexion.php';
$pdo = new Conexion();

// Obtener el email de la sesión
$email_sesion = $_SESSION['email'];

// Obtener nuevo correo
$nuevo_correo = $_POST['cambiar_email'];

//ACTUALIZAR EL CAMPO DE EMAIL
if (isset($_POST['enviar_nuevoCorreo'])) {
    $sql = "SELECT COUNT(*) as count FROM usuarios WHERE email=:nuevo_correo";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':nuevo_correo', $nuevo_correo);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result['count'] > 0) {
        echo "¡El nuevo email ya existe!";
    } else {
        // Consulta para actualizar el email si el email de la sesión es igual al email en la tabla
        $sql = "UPDATE usuarios SET email=:nuevo_correo WHERE email=:email_sesion";

        // Preparar y ejecutar la consulta
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nuevo_correo', $nuevo_correo);
        $stmt->bindValue(':email_sesion', $email_sesion);
        $stmt->execute();

        // Comprobar si la actualización se realizó correctamente
        if ($stmt->rowCount() > 0) {
            echo "Se actualizó el correo electrónico correctamente";
        } else {
            echo "No se pudo actualizar el correo electrónico";
        }
    }
}
