<?php
session_start();

// Utilizaremos session_destroy para destruir la sesión
session_destroy();

// Redirecciona al usuario a la pagina de inicio
header('Location: index.php');
exit;

?>