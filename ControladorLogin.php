<?php

include 'conexion.php';

$pdo = new Conexion();

//Campos de login
$email = $_POST['email'];
$password  = $_POST['password'];

//Comenzaremos una sesión nueva
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
        //Guardaremos una sesión con el email
        $_SESSION["email"] = $email;
        //Será reedireccionado a la pàgina de index
        header('Location: index.php');
    } else {
        //Instanciaremos una variable con un número de error
        $cod_error = 10;
        //Será reedireccionado a la pàgina de errores
        header("Location: error.php?cod_error=" . $cod_error);
    }
}
