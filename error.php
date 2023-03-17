<?php
session_start();

$cod_error = $_GET['cod_error'];

switch ($cod_error) {
    case '10':
        echo "Fallo al iniciar sesión, revise el email y la contraseña.";
        break;
    case '20':
        echo "¡No puedes cerrar sesión sino inicias una!";
    break;
    default:
        echo "Ups parece que hubo un fallo";
        break;
}
