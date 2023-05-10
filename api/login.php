<?php

require_once "../gestionbbdd/bbdd.php";

$nombre = $_REQUEST['nombre'];
$password = $_REQUEST['password'];

$usuario = GestionBBDD::getUsuario($nombre, $password);

if ($usuario != null) {
    $nombre = $usuario->getNombre();
    $permiso = $usuario->getPrivilegio();
    //echo "$nombre,$permiso";
    echo json_encode($permiso);
} else {
    echo json_encode("vacio");
}


?>