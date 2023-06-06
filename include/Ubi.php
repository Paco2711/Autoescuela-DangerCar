<?php

require 'PhpMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicacion</title>
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
            <li class="nav-link"><i class="bi bi-house-fill"></i><a class="text-decoration-none text-black-50" href="../index.html"> Inicio</a></li>
            <li class="nav-link"><i class="bi bi-geo-fill"></i><a class="text-decoration-none text-black-50" href="ubicacion.html"> Contacto </a> <i class="bi bi-telephone-fill"></i></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="MenuPermisos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-vcard"></i> Permisos
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item fw-bold" id="menuPermisosCoche" href="../index.html">COCHE</a></li>
                    <li><a class="dropdown-item fw-bold" id="menuPermisosMoto" href="../index.html">MOTO</a></li>
                    <li><a class="dropdown-item fw-bold" id="menuPermisosCamion" href="../index.html">CAMION</a></li>
                </ul>
            </li>

            <li class="nav-link" ><button  type="button" class="btn btn-outline-dark login py-0 border-2 text-danger" data-bs-toggle="modal" data-bs-target="#loginInicio">
                <i class="bi bi-person-fill-lock noRegister" ></i>
            </button><a class="text-decoration-none text-danger" href="IniciarSesion.php"> Inciar Sesión</a></li>

        </div>

    </div>
</nav>
<div id="general">
    <section class="heroContacto container-fluid bg-image p-5 text-center">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="">
                <p  class="mb-3 fw-bolder text-white ">Contacto</p>
            </div>
        </div>
    </section>

    <section class="mt-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h3 class="text-center fw-bold">¿Dónde nos encontramos?</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.3712737644823!2d-6.216513610403045!3d38.153262717805255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd13e820b0184d5f%3A0xc3e4c80b825fc20c!2sC.%20Llerena%2C%201%2C%2006291%20Montemol%C3%ADn%2C%20Badajoz!5e1!3m2!1ses!2ses!4v1685966011428!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-6">
                    <h3 class="text-center fw-bold">Escríbenos</h3>
                    <form name="form1" method="post" action="Ubi.php">

                        <br><label for="exampleInputName" class="form-label fw-bold">Introduce tu nombre</label>
                        <input type="text" class="form-control" name="frmNombre"  id="exampleInputName" aria-describedby="emailHelp">
                        <label for="exampleInputEmail" class="mt-3 form-label fw-bold">Correo electronico</label>
                        <input type="email" class="form-control" name="frmGmail"  id="exampleInputEmail" placeholder="Introduce tu cuenta de correo">
                        <label for="exampleInputAsunto" class="mt-3 form-label fw-bold">Asunto</label>
                        <input type="text" class="form-control" name="frmAsunto"  id="exampleInputAsunto">
                        <label for="exampleInputMotivos" class="mt-3 form-label fw-bold">Mensaje</label>
                        <input type="text" class="form-control" name="frmMotivos"  id="exampleInputMotivos" placeholder="Expone tus dudas aquí">
                        <button type="submit" name="enviar" class="mt-4 btn btn-secondary btn-outline-light">Enviar</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </section>

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

<?php
if (isset($_POST['enviar'])) {

    $nombre = $_POST['frmNombre'];
    $gmail = $_POST['frmGmail'];
    $asunto = $_POST['frmAsunto'];
    $mensaje = $_POST['frmMotivos'];

    $mail = new PHPMailer(true);

    try {

        $mail->SMTPDebug = 0;                      // 0 o 2 para mostrar errores
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   // Enable SMTP authentication
        $mail->Username = 'fjrodriguezl@educarex.es';    // SMTP username
        $mail->Password = 'yqffyfbukbnjdaff';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        //Recipients
        $mail->setFrom($gmail);   //quien lo envia, en este caso nosotros mismo
        $mail->addAddress('fjrodriguezl@educarex.es');     // Añado si quiero otra cuenta a enviar


        // Attachments PARA ADJUNTAR IMAGENES O ARCHIVOS
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $asunto; //Aqui el asunto
        $texto = "Gmail: ".$gmail."<br> Nombre: ".$nombre."<br> Motivos: ". $mensaje;
        $mail->Body = $texto;


        $mail->send();

    } catch (Exception $e) {

    }
}

?>
<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>
