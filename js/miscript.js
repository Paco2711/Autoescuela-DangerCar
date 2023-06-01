$(document).ready(function() {

    $("#botonAviso").click(function () {
        $.ajax({
            url: "../include/AvisoLegal.html",
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
            url: "../include/PoliticaDeCookies.html",
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
            url: "../include/PoliticaProteccion.html",
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
            url: "../include/PaginaCarnetCoche.html",
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
            url: "../include/PaginaCarnetMoto.html",
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
            url: "../include/PaginaCarnetCamion.html",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })
    $("#carnetB").click(function () {
        $.ajax({
            url: "../include/TiposCarnet/CarnetB.html",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })
    $("#carnetBE").click(function () {
        $.ajax({
            url: "../include/TiposCarnet/CarnetB+E.html",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })
    $("#carnetAM").click(function () {
        $.ajax({
            url: "../include/TiposCarnet/CarnetB.html",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })
    $("#carnetA1").click(function () {
        $.ajax({
            url: "../include/TiposCarnet/CarnetB.html",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })
    $("#carnetA2").click(function () {
        $.ajax({
            url: "../include/TiposCarnet/CarnetB.html",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })
    $("#carnetA").click(function () {
        $.ajax({
            url: "../include/TiposCarnet/CarnetB.html",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })


});