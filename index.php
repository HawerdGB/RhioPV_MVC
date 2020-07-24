<?php
require_once "Rhio/controlador/formulario.controlador.php";
require_once "Rhio/modelos/formulario.modelo.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Loguin Form</title>
    <!-- JQUERY -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <!--FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Los iconos tipo Solid de Fontawesome-->
    <link href="Rhio/HTML/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <!-- <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>-->

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css">

    <style>
    /*   body {
        font-family: Arial, Helvetica, sans-serif;
    }
*/
    * {
        box-sizing: border-box;
    }

    .input-container {
        display: -ms-flexbox;
        /* IE10 */
        display: flex;
        width: 100%;
        margin-bottom: 15px;

    }

    .form-group input {
        height: 42px;
        font-size: 18px;
        border: 0;
        padding-left: 54px;
        border-radius: 5px;
    }

    .icon {
        padding: 10px;
        background: dodgerblue;
        color: white;
        min-width: 50px;
        text-align: center;
    }

    .input-field {
        width: 100%;
        padding: 10px;
        outline: none;
        text-align: left;
    }

    :placeholder-shown {
        color: dodgerblue;
        text-align: left;
    }

    .input-field:focus {
        border: 2px solid dodgerblue;
    }

    /* Set a style for the submit button */
    .btn {
        background-color: dodgerblue;
        color: white;
        padding: 15px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        border-radius: 5px;
    }

    .btn:hover {
        opacity: 1;
    }
    </style>
    
</head>

<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="static/img/avatar6.png" />
                </div>
                    <form method="POST" class="col-12">
                    <div>
                        <div class="input-container">
                            <i class="fa fa-user icon"></i>
                            <input  class="input-field" type="text" placeholder="Nombre de usuario"
                                name="iusuario">
                        </div>
                    </div>
                    <div>
                        <div class="input-container ">
                            <i class="fa fa-key icon"></i>
                            <input  class="input-field " type="password" placeholder="Contraseña"
                                name="iclave">
                        </div>
                    </div>

                    <?php
                
                    $ingreso = new ControladorFormularios();
                    $ingreso -> ctrIngreso();
                
                    ?>

                    <button id="btnRegistro" type="submit" value='Ingresar' class="btn btn-primary"><i
                            class="fas fa-sign-in-alt"></i>
                        Ingresar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="#">Recordar contraseña?</a>
                </div>
            </div>
        </div>
    </div>

    <!--========================================================================-->
    <!--                               JavaScript  -->
    <!--==========================================================================-->

    <script src="Rhio/HTML/vendor/jquery/jquery.min.js"></script>
    <script src="Rhio/HTML/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="Rhio/HTML/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="Rhio/HTML/js/sb-admin-2.min.js"></script>

    <!-- popper-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>