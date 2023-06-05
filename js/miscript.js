$(document).ready(function() {

    $("#botonAviso").click(function () {
        $.ajax({
            url: "include/AvisoLegal.html",
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
            url: "include/PoliticaDeCookies.html",
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
            url: "include/PoliticaProteccion.html",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })

    $("#carnetA1").click(function (){
        $.ajax({
            url: "tiposCarnet/carnetA1.html",
            success: function (respuesta) {
                $("#General").html(respuesta);
            },
            error: function () {
                console.log("No se ha podido obtener la información");
            }
        });
    })

});