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

    
    // $consulta = $pdo->prepare('SELECT nombre FROM usuarios WHERE email = :email AND password = :password;
    // ');

    // $consulta->bindValue(':email', $email);
    // $consulta->bindValue(':password', $password);
    // $consulta->bindValue(':nombre', 'nombre');
    // $consulta->execute();
    // $consulta->setFetchMode(PDO::FETCH_ASSOC);

    // if ($consulta) {
    //     $_SESSION["nombre"] = $nombre;

    //     echo '<script>alert (" Bienvenid@! ' . $nombre . '");</script>';
    // }

    // Comprobar si hay resultados

    if ($sql->rowCount() > 0) {
        $_SESSION["email"] = $email;

        echo '<script>alert (" Bienvenid@! ' . $email . '");</script>';
        header('Location: index.php');
    } else {
        echo "Lo siento! el usuario no se ha encontrado!";
    }
}
