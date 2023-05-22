<?php
include_once("Usuarios.php");
include_once("BD.php");
?>
    <!doctype html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Crear Usuario</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <script defer src="../js/bootstrap.bundle.min.js"></script>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css">
    </head>

    <body class="iniciar">

    <form name="form1" method="post" action="crearUsuario.php">
        <div class="general w-50 text-center">
            <p class="fw-bolder fs-1 titulo">Cine La Butaca</p>
            <h1 class="text-danger font-monospace">FORMULARIO DE REGISTRO</h1>
            <label class="me-1"></label><input type="text" placeholder="Introduzca un usuario" name="frmNombre" size="30">
            <label class=" me-1 pt-3"></label><input type="text" placeholder="Introduzca una contraseña" name="passwd" size="30">
            <label class="me-1 pt-3"></label><input type="text" placeholder="Repita la contraseña" name="passwd1" size="30"><br>
            <input class="mt-2 " type="submit" name="crear" value="Crear Usuario">
            <h3 class="d-block ">¿Ya estás registrado?</h3><a class="text-white" href="IniciarSesion.php">Iniciar Sesión Ahora</a>
        </div>
    </form>

    <?php

    if (isset($_POST['crear'])){
        $usuario = $_POST['frmNombre'];
        $passwd = $_POST['passwd'];
        $passwd1 = $_POST['passwd1'];

        if ($passwd==$passwd1){
            $mensaje = Base::insertar_usuario($usuario,$passwd);
            if ($mensaje != false){
                echo '<script>alert("El usuario se ha creado correctamente")</script>';
                header("location: ../PaginaPrincipal.php");
            }
        }else{
            echo '<script>alert("Las contraseñas no coinciden")</script>';
        }

    }

    ?>

    </body>
    </html>


