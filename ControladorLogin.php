<?php

include 'conexion.php';

$pdo = new Conexion();

//Campos de login
$email = $_POST['email'];
$password  = $_POST['password'];

session_start();
if (!isset($_POST['submit'])) {

    //Comprobar que los campos de login estes en la base de datos
    $sql = $pdo->prepare('SELECT email AND password FROM usuarios WHERE :email=email AND :password=password');

    // Asignar un valor a la consulta utilizando bindValue
    $sql->bindValue(':email', $email);
    $sql->bindValue(':password', $password);

    // Ejecutar la consulta
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $_SESSION["email"] = $email;

        echo '<script>alert (" Bienvenid@! ' . $email . '");</script>';
        header('Location: index.php');
    } else {
        $cod_error = 10;
        header("Location: error.php?cod_error=" . $cod_error);
    }
}
