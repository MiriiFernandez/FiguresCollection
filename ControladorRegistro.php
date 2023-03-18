<?php
include 'conexion.php';

$pdo = new Conexion();

// Recoger los valores de fetch
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

//Crearemos un array con las variables
$data = array(
    $nombre,
    $email,
    $password,
    $password_repeat
);

/**Instanciaremos la variable como array, 
donde se almacenarán los mensajes de errores**/
$mensajes = array();


// Validar el nombre
if (empty($nombre) || empty($email) || empty($password) || empty($password_repeat)) {
    //Almacenaremos el errror en la array
    $mensajes[] = 'campos no pueden estar vacios';
}

// Validar el correo electrónico
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $mensajes[] = 'email no valido';
}

// Validar la repetición de la contraseña
if ($password_repeat !== $password) {
    $mensajes[] = 'las contraseñas no coinciden';
}

// Si hay errores, devolver una respuesta con el array
if (!empty($mensajes)) {
    $response = array(
        'success' => false,
        'errors' => $mensajes
    );
    header('Content-Type: application/json');
    echo json_encode(false);
} else {

    if ($pdo) {

        try {
            /**Comprobará que el email no exista 
            en la base de datos, asi no repetiremos correos**/
            $sql = "SELECT COUNT(*) as count FROM usuarios WHERE email=:email";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':email', $_POST['email']);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result['count'] > 0) {
                echo json_encode(false);
            } else {
                //Insertar registro
                $sql = "INSERT INTO usuarios (nombre, email, password) VALUES(:nombre, :email, :password)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(':nombre', $_POST['nombre']);
                $stmt->bindValue(':email', $_POST['email']);
                $stmt->bindValue(':password', $_POST['password']);
                $stmt->execute();
                $idPost = $pdo->lastInsertId();
                if ($idPost) {
                    header("login.php");
                    echo json_encode($idPost);
                    exit;
                }
            }
        } catch (PDOException $error) {
            "Error: " . $error->getMessage();
        }
    }
    exit;
}

// Devolver la respuesta con los datos codificados en JSON
$response = array(
    'success' => true,
    'data' => $data
);
