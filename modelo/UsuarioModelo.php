<?php
include 'conexion.php';

class UsuarioModelo
{
    //datos formulario
    protected $datos = [
        "nombre" => $_POST["nombre"],
        "email" => $_POST["email"],
        "contrasena" => $_POST["contrasena"]
    ]; 

    /**
     * @method insert()
     * @param datos los datos del usuario
     * @return estado bool para saber si se ha creado la entrada
     */
    public function insert($datos)
    {

        //1) CONECTAR DB
        $pdo = new Conexion();

        //2) INSERTAR DATOS
        if ($pdo) {

            $sql = "INSERT INTO usuarios ( nombre, email, contrasena ) VALUES (:nombre, :email, :contrasena)";

            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(':nombre', $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindValue(':email', $datos["email"], PDO::PARAM_STR);
            $stmt->bindValue(':contrasena', $datos["contrasena"], PDO::PARAM_STR);

            $estado = $stmt->execute();

            //3) RETURN ESTADO
            if ($estado) {

                $pdo = null;
                return true;
            }
        }

        $pdo = null;
        return false;
    }

    /**
     * @method select()
     * @param datos los datos del formulario
     * @return usuario
     */

    public function select($datos)
    {

        //1) CONECTAR DB
        $pdo = new Conexion();

        //2) REALIZAR CONSULTA

        if ($pdo) {
            $sql = "SELECT * from usuarios WHERE email=:email AND contrasena=:contrasena";

            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindValue(":contrasena", $datos["contrasena"], PDO::PARAM_STR);

            $stmt->execute();
            $usuario = $stmt->fetch(); //RECOGE 1 USUARIO
            //->fetchAll(); RECOGE UN LISTADO DE USUARIOS

            //3) RETURN USUARIO
            return $usuario;
        }

        $pdo = null;
        return false;
    }
}
