<?php
require_once "tablas/usuarios.php";
require_once "BD.php";

$array_usuarios= Base::obtenerUsuarios();

if (isset($_REQUEST['iddni'])){
    $codigo = $_REQUEST['iddni'];
    Base::borrar_usuario($codigo);
    header('Location:paginaProfesor.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnet de Coche</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/miscript.js"></script>
</head>

<body>
<header>
    <nav id="barraarriba" class="navbar navbar-expand-lg text-muted p-0">
        <div class="container-fluid">
            <a class="nav-link text-black-50 ps-4"><i class="bi bi-geo-alt-fill pe-1"></i>Calle Llerena, 1, Montemolín, Badajoz</a>
            <div class="collapse navbar-collapse d-lg-flex justify-content-end d-none" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link text-black"><i class="bi bi-envelope pe-2"></i>info@dangercar.es</a>
                    <a class="nav-link text-black pe-4"><i class="bi bi-telephone-fill pe-2"></i>685-498-825</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<nav id="barraopciones" class="container-fluid navbar navbar-expand-lg navbar-light bg-light navigation-wrap fw-bold">
    <a class="navbar-brand ms-4"><img width="100" height="75" src="../img/logon-removebg-preview.png" alt="logo" /></a>
    <div class="collapse navbar-collapse">
        <div class="navbar-nav ms-auto me-5">
            <li class="nav-link" ><button  type="button" class="btn btn-outline-dark login py-0 border-2 text-danger" data-bs-toggle="modal" data-bs-target="#loginInicio">
                <i class="bi bi-person-fill-lock noRegister" ></i>
            </button><a class="text-decoration-none text-danger" href="../index.html"> Cerrar Sesión</a></li>

        </div>

    </div>
</nav>

<div id="General">
    <h1>Gestión de Usuarios</h1>
    <form action="<?Php  echo   $_SERVER['PHP_SELF'];?>" method="post">

</div>

<div id="contenedor">

    <h1>Listado de Comidas del Restaurante</h1>
    <table>
        <tr>
            <th>DNI</th>
            <th>Nombre y Apellidos</th>
            <th>Carnet en Posesion</th>
            <th>Localidad</th>
            <th>Eliminar</th>
        </tr>
        <?php

    foreach ($array_usuarios as $user){ ?>
        <tr>
            <td><?php echo $user->getDni() ?></td>
            <td><?php echo $user->getNombre()?> " "<?php echo $user->getApellidos()?>  </td>
            <td ><?php echo $user->getCarnetPosesion() ?></td>
            <td><?php echo $user->getLocalidad() ?><td>
            <td><a href="paginaProfesor.php?iddni=<?Php echo $user->getDni() ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>

        </tr>
        </form>s
        <?php } ?>
    </table>
    <br>
</div>
<footer class="text-white" id="pie">
    <div class="container text-center">
        <div ps-0 class="row align-items-start">
            <div class="col-6">
                <h4>Nosotros</h4>
                <p class="text-start">En Autoescuela DangerCar llebamos más de 20 años ofreciéndote la mejor calidad y el mejor precio del mercado. Contamos con profesores altamente cualificados y experimentados.</p>

            </div>
            <div class="col-6">
                <h4>Servicios</h4>
                <ul class="list-group  list-group-flush">
                    <li class="list-group-item" ><a class="text-decoration-none text-black" href="PaginaCarnetCoche.html">Carnet de Coche</a></li>
                    <li class="list-group-item" ><a class="text-decoration-none text-black" href="PaginaCarnetMoto.html">Carnet de Moto</a></li>
                    <li class="list-group-item" ><a class="text-decoration-none text-black" href="PaginaCarnetCamion.html">Carnet de Camión</a></li>
                </ul>
            </div>
        </div>
    </div>
    <nav id="barraAbajo" class="navbar navbar-expand-lg text-muted p-0 ">
        <div class="container-fluid">
            <div class="collapse navbar-collapse d-lg-flex justify-content-start d-none" id="barraAviso">
                <div class="navbar-nav ">
                    <a id="botonAviso" class="nav-link ps-5 pe-4 text-decoration-none text-black">Aviso legal</a>
                    <a id="botonCookies" class="nav-link  pe-4 text-decoration-none text-black">Política de cookies</a>
                    <a id="botonProteccion" class="nav-link pe-4 text-decoration-none text-black"> Política de protección de datos</a>

                </div>
            </div>
        </div>
    </nav>

</footer>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>