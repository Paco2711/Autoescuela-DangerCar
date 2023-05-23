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
<div class="general m-auto text-center text-white">

    <div class="formulario w-50 m-auto">
        <img class="w-25" src="../img/logon-removebg-preview.png">
        <form name="form1" method="post" action="crearUsuario.php">

            <br><label for="exampleFormControlInput1" class="form-label fw-bold">Introduce tu DNI</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="XXXXXXXX-X">
            <label for="exampleInputFecha" class="mt-1 form-label fw-bold">Fecha de Nacimiento</label><br>
            <select class="form-select w-25 d-inline" name="dia" aria-label="Default select example">
                <option selected>Dia</option>
                <?php
                for ($i = 1; $i <= 31; $i++) {
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
                ?>
            </select>
            <select class="form-select w-25 d-inline" name="mes" aria-label="Default select example">
                <option selected>Mes</option>
                <?php
                $listaMes = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
                 for ($i = 0; $i < count($listaMes); $i++) {
                    echo '<option value="'.$listaMes[$i].'">'.$listaMes[$i].'</option>';
                }
                ?>
            </select>
            <input type="text" class="form-control w-25 d-inline" name="ano"  id="exampleInputano" placeholder="XXXX"><br>

            <label for="exampleInputNombre" class="mt-1 form-label fw-bold">Nombre</label>
            <input type="text" class="form-control" name="nombre"  id="exampleInputNombre">

            <label for="exampleInputApellidos" class="mt-1 form-label fw-bold">Apellidos</label>
            <input type="text" class="form-control" name="apellidos"  id="exampleInputApellidos">

            <label for="exampleInputLocalidad" class="mt-1 form-label fw-bold">Localidad</label>
            <input type="text" class="form-control" name="localidad"  id="exampleInputLocalidad">

            <label for="exampleInputProvincia" class="mt-1 form-label fw-bold">Provincia</label>
            <select class="form-select  d-inline" name="mes" aria-label="Default select example">
                <option selected>Elige la provincia</option>
                <?php
                $provincias = ["Álava (Araba)- País Vasco (Euskadi)","Albacete - Castilla-La Mancha","Alicante - Comunidad Valenciana","Almería - Andalucía","Asturias - Principado de Asturias","Ávila - Castilla y León", "Badajoz - Extremadura", "Barcelona - Cataluña (Catalunya)", "Burgos - Castilla y León", "Cáceres - Extremadura", "Cádiz - Andalucía", "Cantabria - Cantabria", "Castellón (Castelló) - Comunidad Valenciana (Comunitat Valenciana)", "Ciudad Real - Castilla-La Mancha", "Córdoba - Andalucía", "Cuenca - Castilla-La Mancha", "Gerona (Girona) - Cataluña (Catalunya)", "Granada - Andalucía", "Guadalajara - Castilla-La Mancha", "Guipúzcoa (Gipuzkoa) - País Vasco (Euskadi)", "Huelva - Andalucía", "Huesca - Aragón", "Islas Baleares (Illes Balears) - Islas Baleares (Illes Balears)", "Jaén - Andalucía", "La Coruña (A Coruña) - Galicia", "La Rioja - La Rioja", "Las Palmas - Canarias", "León - Castilla y León", "Lérida (Lleida) - Cataluña (Catalunya)", "Lugo - Galicia", "Madrid - Comunidad de Madrid", "Málaga - Andalucía", "Murcia - Región de Murcia", "Navarra (Nafarroa) - Comunidad Foral de Navarra (Nafarroako Foru Komunitate)", "Orense (Ourense) - Galicia", "Palencia - Castilla y León", "Pontevedra - Galicia", "Salamanca - Castilla y León", "Santa Cruz de Tenerife - Canarias", "Segovia - Castilla y León", "Sevilla - Andalucía", "Soria - Castilla y León", "Tarragona - Cataluña", "Teruel - Aragón", "Toledo - Castilla-La Mancha", "Valencia - Comunidad Valenciana (Comunitat Valenciana)", "Valladolid - Castilla y León", "Vizcaya (Bizkaia) - País Vasco (Euskadi)", "Zamora - Castilla y León", "Zaragoza - Aragón"];
                for ($i = 0; $i < count($provincias); $i++) {
                    echo '<option value="'.$provincias[$i].'">'.$provincias[$i].'</option>';
                }
                ?>
            </select>

            <label for="exampleInputCodigo" class="mt-1 form-label fw-bold">Código Postal</label>
            <input type="number" class="form-control" name="codigo"  id="exampleInputCodigo">

            <label for="exampleInputCalle" class="mt-1 form-label fw-bold">Dirección de la Calle</label>
            <input type="text" class="form-control" name="calle"  id="exampleInputCalle">

            <button type="button" name="iniciar" class="mt-4 btn btn-outline-light">Iniciar Sesión</button>

            <p class="mt-4 d-block">¿Ya estás registrado?<a class="text-white ms-2" href="IniciarSesion.php">Inicia Sesión aquí</a></p>
    </div>
    </form>
</div>
</div>
<?php


if (isset($_POST['iniciar'])){
    $usuario = $_POST['frmGmail'];
    $passwd = $_POST['passwd'];
    $mensaje = Base::comprobarUsuario($usuario,$passwd);

    if ($mensaje != false){
        session_start();
        $_SESSION["usuario"]=$usuario;
        header('location:paginaUsuario.html');
        echo  $usuario;
    }else{
        echo '<script>alert("El usuario y/o la contraseña son incorrectas o no existen.")</script>';
    }
}

?>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
