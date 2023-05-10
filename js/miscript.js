$(document).on("click", "#enviar", function(e) {
    e.preventDefault()
    if ($("#validationUser").val() == "" || $("#validationPsswrd").val() == "") {
        return false;
    }
    $.ajax({
        url: "api/login.php",
        type: "post",
        data: {'nombre':$("#validationUser").val(), 'password':$("#validationPsswrd").val()},
        dataType: "json",
        success: function(resultado) {
            if (resultado == "vacio") {
                swal("Usuario no existe", "", "error")
            } else {
                if (resultado == "admin") {
                    window.open("admin.html")
                    window.close()
                }
                $("i").remove(".noRegister")
                $(".login").html("<p class='px-2 logeado' id='usuario'>Hola, <span id='nameUsuario'>" + $("#validationUser").val() + "</span></p><i class='bi bi-person-fill-exclamation'></i>")
                // INICIO COOKIES //
                let momento = new Date()
                let jsonDate = momento.toJSON()
                let notificaciones = Math.ceil(Math.random() * 10)
                sessionStorage.setItem('anno', jsonDate)
                sessionStorage.setItem('noty', notificaciones)
                $(".cuerpo").html("<h5>Inicio de sesión: " + sessionStorage.getItem('anno') + "</h5><h5>Notificaciones pendientes: " + sessionStorage.getItem('noty') + "</h5>")
                // FIN COOKIES //
                $(".eliminar").attr("class","btn-close")
                $(".pie").html("<button type='submit' class='btn btn-danger' id='salir'>Salir</button>")
                $("#loginInicio").modal('hide')
                // Mostrar un cartel aleatorio cada vez que inicias sesion //
                $.ajax({
                    url: "api/peliculas.php",
                    dataType: "json",
                    success: function(result) {
                        let rdo =  Math.floor(Math.random() * result.length)
                        let image = result[rdo].imagen
                        swal({
                            icon: image,
                            buttons: false
                        })
                        $(".swal-modal").css({"background-color": "transparent", "height": "100vh"})
                    }
                })
            }
            $("#validationUser").val('')
            $("#validationPsswrd").val('')
        }
    })
})

$(document).on("click", "#register", function () {
    let div = "<div class='mt-2' id='eliminar'>\
    <label for='validationPsswrd' class='form-label'><h5>Repite contraseña</h5></label>\
    <input type='password' name='psswrdRepeat' id='validationPsswrdRepeat' class='form-control' placeholder='123456' required>\
    <div class='invalid-feedback'>\
    Rellene la contraseña de nuevo\
    </div>\
    <div class='valid-feedback'>\
    Perfecto\
    </div>\
    </div>"
    let boton = "<button type='button' class='btn btn-danger eliminar' id='registerFin' >Registrarse</button>"
    $(".contra").after(div)
    $(".modal-footer").html(boton)
    $(".cabeza").attr("class", "btn-close eliminar cabeza reset")
})

$(document).on("click", "#registerFin", function(e) {
    e.preventDefault()
    if ($("#validationUser").val() == "" || $("#validationPsswrd").val() == "" || $("#validationPsswrdRepeat").val() == "") {
        return false;
    }
    if ($("#validationPsswrd").val() != $("#validationPsswrdRepeat").val()) {
        swal("", "Contraseñas diferentes", "warning")
        return false
    }
    $.ajax({
        url: "api/register.php",
        type: "post",
        data: {'nombre':$("#validationUser").val(), 'password':$("#validationPsswrd").val()},
        success: function(resultado) {
            if (resultado == $("#validationUser").val()) {
                swal( "Registrado usuario: " + resultado, "", "success")
                $("#validationUser").val('')
                $("#validationPsswrd").val('')
                $("#validationPsswrdRepeat").val('')
                let botones = "<button type='button' class='btn btn-danger' id='enviar'>Iniciar</button>\
                <button type='button' class='btn btn-danger' id='register'>Registrarse</button>"
                $("#eliminar").remove()
                $(".modal-footer").html(botones)
                $("#loginInicio").modal('hide')
            } else {
                swal("", resultado, "info")
            }
        }
    })
})

$(document).on("click", ".reset", function() {
    let botones = "<button type='button' class='btn btn-danger' id='enviar'>Iniciar</button>\
    <button type='button' class='btn btn-danger' id='register'>Registrarse</button>"
    $("#eliminar").remove()
    $(".modal-footer").html(botones)
    $("#validationUser").val('')
    $("#validationPsswrd").val('')
})