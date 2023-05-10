<?php

require_once "../include/BD.php";

$nombre = $_REQUEST['nombreUsuario'];
$password = $_REQUEST['password'];
$rol= $_REQUEST['rol'];

$usuario = BD::insertUsusario($nombre, $password, $rol);

if ($usuario > 0) {
    echo $nombre;
}

?>