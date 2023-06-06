<?php
require_once "../include/tablas/usuarios.php";
class Base{
    public static function realizarConexion(){
        try {
            $conexion = new PDO("mysql:host=db5013291447.hosting-data.io; dbname=dbs11147195","dbu5020947","Daw_2023");
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
    public static function borrar_usuario($dni){
        try{
            $sql="DELETE FROM `comidas` WHERE  DNI  = :n_borrar";
            $conexion=self::realizarConexion($sql);
            $resultado=$conexion->prepare($sql);
            $resultado->execute(array(":n_borrar"=> $dni));
            $resultado->closeCursor();
            $conexion=null;
            return 1;
        }catch (PDOException $e){
            return 0;

        }
    }

    public static function obtenerUsuarios(){
        $sql="SELECT * FROM usuarios";
        $conexion=self::realizarConexion();
        $resultado=$conexion->prepare($sql);
        $resultado->execute(array());
        $arra_usuarios=array();
        while ($fila=$resultado->fetch()){
            $arra_usuarios[]= new Usuario($fila);
        }
        $resultado->closeCursor();
        $conexion=null;
        return ($arra_usuarios);
    }
}