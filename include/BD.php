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

    public static function comprobarUsuario($usuario, $clave){
        try {
            $sql="select * from usuarios where nombreUsuario like '$usuario' and password like '$clave'";
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

    public static function insertar_usuario($usuario, $clave){
        try {
            $sql="insert into usuarios (nombreUsuario, password)";
            $sql.="VALUES ('$usuario', '$clave')";
            $conexion=self::realizarConexion();
            $afectados=$conexion->exec($sql);
            if ($afectados > 0){
                $mensaje= "Se ha creado el usuario correctamente";
            }
        } catch (PDOException $e){
            $mensaje= "No se ha podido realizar la insercción del usuario";
        }
        $conexion=null;
        return $mensaje;
    }
    public static function insertar_alumno($dni,$fechaN, $nombre, $apellidos, $localidad, $provincia, $codPostal, $calle, $carnetPosesion){
        try {
            $sql="insert into alumnos (DNI,FechaNacimiento,Nombre,Apellidos,Localidad,Provincia, CodigoPostal, Calle, CarnetPosesion)";
            $sql.="VALUES ('$dni', '$fechaN','$nombre','$apellidos','$localidad','$provincia','$codPostal','$calle','$carnetPosesion')";
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