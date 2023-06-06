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
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/miscript.js"></script>
</head>

<body class="general">
<div class="shadow bg-light mt-2 pt-2 pb-1 text-center"><p> Para volver a inicio haz click <a href="../index.html">aquí</a></p></div>
<div class="m-auto text-center text-white">

   <div class="formulario w-50 m-auto">
        <img class="w-25" src="../img/logon-removebg-preview.png">
<form name="form1" method="post" action="IniciarSesion.php">

        <br><label for="exampleInputEmail1" class="form-label fw-bold">Introduce tu email</label>
            <input type="email" class="form-control" name="frmGmail"  id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputPassword1" class="mt-3 form-label fw-bold">Contraseña</label>
            <input type="password" class="form-control" name="passwd"  id="exampleInputPassword1">
        <button type="submit" name="iniciar" class="mt-4 btn btn-outline-light">Iniciar Sesión</button>

        <p class="mt-4 d-block">Aún no te has registrado con nosotros, ¿A qué esperas?<a class="text-white ms-4" href="crearUsuario.php">Regístrate Ahora aquí</a></p>
    </div>
</form>
    </div>
</div>
<?php


if (isset($_POST['iniciar'])){
    $usuario = $_POST['frmGmail'];
    $passwd = $_POST['passwd'];
    $mensaje = Base::comprobarUsuario($usuario,$passwd);
    $array_rol = Base::getRol($usuario,$passwd);
    foreach ($array_rol as $rol) {
        $rolF = $rol->getRol();
    }
    if ($mensaje != false && $rolF=='profesor' ){
        echo "Estoy dentro";
        echo'<script>window.location.href = "paginaProfesor.html"</script>';
        exit();
    }elseif ($mensaje != false){
        echo'<script>window.location.href = "paginaUsuario.html"</script>';
        exit();
    }else{
        echo '<script>alert("El usuario y/o la contraseña son incorrectas o no existen.")</script>';
}
}

?>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
