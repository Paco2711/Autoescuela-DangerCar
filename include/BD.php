<?php
require_once "../include/tablas/usuarios.php";
class Base{
    public static function realizarConexion(){
        try {
            $conexion = new PDO("mysql:host=localhost; dbname=autoescuela","root","");
            //$conexion = new PDO("mysql:host=$servidor;dbname=$nombreBD;charset=utf8", $usuario, $clave);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");
            return $conexion;
        }
        catch(Exception $e)
        {
            echo "Error al realizar la conexión: " . $e->getMessage();
        }
    }

    public static function getUsuario($nombre, $password) {
        try {
            $sql = "select * from usuarios where nombreUsuario = :n_user and password = :n_password;";
            $conexion=self::realizarConexion();
            $resultado=$conexion->prepare($sql);
            $resultado->execute(array(":n_user"=>$nombre,":n_password"=>$password));
            $fila=$resultado->fetch();
            $usuario = null;
            if ($fila != null) {
                $usuario = new Usuario($fila);
            }
            $resultado->closeCursor();
            $conexion=null;
            return ($usuario);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function insertUsusario($nombre, $password, $rol) {
        try {
            $sql = "insert into usuarios (nombreUsuario, password, rol) values (:n_user, :n_password, :n_rol);";
            $conexion=self::realizarConexion();
            $resultado=$conexion->prepare($sql);
            $afectados = $resultado->execute(array(":n_user"=>$nombre,":n_password"=>$password, ":n_rol"=>$rol));
            $resultado->closeCursor();
            $conexion=null;
            return ($afectados);
        } catch (Exception $e) {
            echo "Nombre de usuario ya existe, elige otro";
        }
    }



}