<?php

// Recoger los valores de fetch
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

$data = array(
    $nombre,
    $email,
    $password,
    $password_repeat
);

$mensajes = array();

// Validar el nombre
if (empty($nombre) || empty($email) || empty($password) || empty($password_repeat)) {
    $mensajes[] = 'campos no pueden estar vacios';
}

// Validar el correo electrónico
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $mensajes[] = 'email no valido';
}

// Validar la repetición de la contraseña
if ($password_repeat !== $password) {
    // echo json_encode(['status'=> false, 'message'=> ["password" =>"Las contraseñas no coinciden"]]);
    $mensajes[] = 'las contraseñas no coinciden';
}

// Si hay errores, devolver una respuesta con un arreglo de errores
if (!empty($mensajes)) {
    $response = array(
        'success' => false,
        'errors' => $mensajes
    );
    header('Content-Type: application/json');
    // echo json_encode($response);
    echo json_encode(false);
    exit;
} else {
    echo json_encode('Usuario listo para ingresar');
    exit;
}

// Devolver la respuesta con los datos codificados en JSON
$response = array(
    'success' => true,
    'data' => $data
);

//3) GUARDAR DATOS
$datos_bd = []; //enviamos esto a bd.

$usuario = new UsuarioModelo();
$estado = $usuario->insert($datos_bd); //estado
//4) RETURN RESPONSE
if ($estado) {

    echo "Todo ok";
} else {
    echo "Todo mal :(";
}
