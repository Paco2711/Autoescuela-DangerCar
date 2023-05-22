<?php
include_once("tablas/usuarios.php");
include_once("BD.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoescuela DangerCar</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/miscript.js"></script>
</head>

<body>
<div class="izquierda"> <img class="img2" src="../img/logo.png"><img class="img1" src="../img/descarga.jpeg"></div>
<div class="derecha m-auto text-center">
<form name="form1" method="post" action="paginaUsuario.html">

            <label for="exampleInputEmail1" class="form-label fw-bold ">Introduce tu email</label>
            <input type="email" class="form-control" name="frmNombre"  id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputPassword1" class="form-label fw-bold">Contraseña</label>
            <input type="password" class="form-control" name="passwd"  id="exampleInputPassword1">
        <input class="mt-2 " type="submit" name="iniciar" value="Iniciar Sesión">
        <h3 class="d-block">¿Eres Nuevo?</h3><a class="text-white" href="crearUsuario.php">Regístrate Ahora</a>
    </div>
</form>
</div>
<?php


if (isset($_POST['iniciar'])){
    $usuario = $_POST['frmNombre'];
    $passwd = $_POST['passwd'];
    $mensaje = Base::comprobarUsuario($usuario,$passwd);

    if ($mensaje != false){
        session_start();
        $_SESSION["usuario"]=$usuario;
        header('location:./Include/index.html?');
        echo  $usuario;
    }else{
        echo '<script>alert("El usuario y/o la contraseña son incorrectas o no existen.")</script>';
}
}

?>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
