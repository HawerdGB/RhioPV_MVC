$(document).ready(function () {
    //script para el boton de nuevo registro
    $("#btnNuevo").click(function () {
        jQuery.noConflict();
        $("#frmPrincipal").trigger("reset");
        $(".modal-header").css("background-color", "#28a745");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("Nuevo Registro");
        $("#mimodal").modal("show");
    });

    $("#eyebtn").click(function () {
        jQuery.noConflict();
        $("#frmPrincipal").trigger("reset");
        $(".modal-header").css("background-color", " #eea29a");
        $(".modal-header").css("color", "white");
        $(".modal-title").text("View Registro");
        $("#mimodal").modal("show");
    });
});