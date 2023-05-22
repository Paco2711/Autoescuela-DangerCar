<?php
include_once("tablas/usuarios.php");
include_once("BD.php");
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/miscript.js"></script>
</head>

<body class="iniciar">


<form name="form1" method="post" action="paginaUsuario.html">

    <div class="general w-50 text-center">
        <p class="fw-bolder fs-1 titulo">Cine La Butaca</p>
        <h1 class="text-body font-monospace">Iniciar Sesión</h1>
        <label class="me-4 ">Usuario</label><input type="text" name="frmNombre" size="30"><br>
        <label class=" me-1 pt-3">Contraseña</label><input type="text" name="passwd" size="30"><br>
        <input class="mt-2 " type="submit" name="iniciar" value="Iniciar Sesión">
        <h3 class="d-block">¿Eres Nuevo?</h3><a class="text-white" href="crearUsuario.php">Regístrate Ahora</a>
    </div>
</form>

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

</body>
</html>
