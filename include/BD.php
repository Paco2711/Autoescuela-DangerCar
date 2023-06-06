<?php
require_once "../include/tablas/usuarios.php";
class Base{
    public static function realizarConexion(){
        try {
            $conexion = new PDO("mysql:host=access964577020.webspace-data.io; dbname=db5013291447","881316364","_Fj2711rl01");
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

    public static function comprobarUsuario($usuario, $clave){
        try {
            $sql="select * from usuarios where nombreUsuario like '$usuario' and passwd like '$clave'";
            $conexion=self::realizarConexion();
            $resultado=$conexion->query($sql);
            $fila = $resultado->fetch();
            if ($fila!=null){
                return $fila;
            }else{
                return null;
                $fila = $resultado->fetch();

            }
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public static function obtenerRol($usuario, $clave){
        try {
            $sql="select rol from usuarios where nombreUsuario like '$usuario' and passwd like '$clave'";
            $conexion=self::realizarConexion();
            $resultado=$conexion->query($sql);
            $rol = $resultado->fetch();
            if ($rol!=null){
                return $rol;
            }else{
                return null;
                $fila = $resultado->fetch();

            }
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public static function getRol($usuario, $clave){
        $sql="select * from usuarios where nombreUsuario like '$usuario' and passwd like '$clave'";
        $conexion=self::realizarConexion();
        $resultado=$conexion->prepare($sql);
        $resultado->execute(array());
        $arra_rol=array();
        while ($fila=$resultado->fetch()) {
            $arra_rol[] = new Usuario($fila);
        }
        $resultado->closeCursor();
        $conexion=null;
        return ($arra_rol);
    }
    public static function insertar_usuario($dni, $fechaN, $nombre, $apellidos, $localidad, $provincia, $codPostal, $calle, $carnetPosesion, $gmail, $passwd){
        try {
            $sql="insert into usuarios (DNI,FechaNacimiento,Nombre,Apellidos,Localidad,Provincia, CodigoPostal, Calle, CarnetPosesion,nombreUsuario,passwd)";
            $sql.="VALUES ('$dni', '$fechaN','$nombre','$apellidos','$localidad','$provincia','$codPostal','$calle','$carnetPosesion','$gmail','$passwd')";
            $conexion=self::realizarConexion();
            $afectados=$conexion->exec($sql);
            if ($afectados > 0){
                $mensaje= "Se ha creado el alumno correctamente";
            }
        } catch (PDOException $e){
            $mensaje= "No se ha podido realizar la insercción del usuario";
        }
        $conexion=null;
        return $mensaje;
    }


}