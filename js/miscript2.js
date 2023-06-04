$(document).ready(function() {

    $("#botonAviso").click(function () {
        $.ajax({
            url: "",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })
    $("#botonCookies").click(function () {
        $.ajax({
            url: "../PoliticaDeCookies.html",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })
    $("#botonProteccion").click(function () {
        $.ajax({
            url: "../PoliticaProteccion.html",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })
    $("#menuPermisosCoche,#carnetCoche").click(function () {
        $.ajax({
            url: "../PaginaCarnetCoche.html",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })
    $("#menuPermisosMoto,#carnetMoto").click(function () {
        $.ajax({
            url: "../PaginaCarnetMoto.html",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })
    $("#menuPermisosCamion,#carnetCamion").click(function () {
        $.ajax({
            url: "../PaginaCarnetCamion.html",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })

});