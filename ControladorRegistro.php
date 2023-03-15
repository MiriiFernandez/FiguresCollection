<?php

// Crear una instancia de PDO y establecer la conexión con la base de datos
include 'conexion.php';

$pdo = new Conexion();

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
}

// Devolver la respuesta con los datos codificados en JSON
$response = array(
    'success' => true,
    'data' => $data
);

echo json_encode(false);


// // Crear una sentencia SQL para insertar los datos del formulario en la base de datos
// $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)";

// // Preparar la sentencia
// $stmt = $pdo->prepare($sql);

// // Asignar valores a los marcadores de posición y ejecutar la sentencia
// $stmt->execute(array(
//     ':nombre' => $nombre,
//     ':email' => $email,
//     ':password' => password_hash($password, PASSWORD_DEFAULT)
// ));

// echo "Usuario registrado correctamente";
