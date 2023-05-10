<?php

require_once "../gestionbbdd/bbdd.php";

$nombre = $_REQUEST['nombre'];
$password = $_REQUEST['password'];

$usuario = GestionBBDD::insertUsusario($nombre, $password);

if ($usuario > 0) {
    echo $nombre;
}

?>