<?php

  session_start();
 class ControladorFormularios{

    /*==================================
     Registro Usuarios
     ===================================*/

     static public function ctrRegistroUsuario(){

        $tabla ="usuarios";

        $datos = array("nombre" => $_POST["rNombre"],
                        "clave" => $_POST["rClave"],
                        "activo" => $_POST["rActivo"],
                        "mail" => $_POST["rMail"],
                        "usuario" => $_POST["rUsuario"]);

                        $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

                        return $respuesta;
     }

 
 /*=============================================
  Ingreso al sistema
  ==============================================*/
     public function ctrIngreso(){
        
        if(isset($_POST["iusuario"])){

          $tabla = "usuarios";
          $item ="usuario";
          $valor = $_POST["iusuario"];
        
          $respuesta = ModeloFormularios::mdlSeleccionar($tabla, $item, $valor);
            if(empty($respuesta)){
              echo '<div class="alert alert-danger">Error Login<br>Usuario no registrado</div>';
            }else{

         
          if(empty($_POST["iclave"]) || empty($_POST["iusuario"]))
          {
            echo '<script>
              if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href ); 
              }
          </script>';

          echo '<div class="alert alert-danger">Error Login<br>Usuario y/o clave no deben estar vacios</div>';   
          }else{
              
            if(($respuesta["clave"] == $_POST["iclave"]) && 
             ($respuesta["usuario"] == $_POST["iusuario"])){
            
            
            $_SESSION["validarIngreso"] = 'ok';
            $_SESSION["nombre"] = $respuesta["nombre"];
            $_SESSION["nivel"] = $respuesta["nivel"];
            $_SESSION["imagen"] = $respuesta["imagen"];

            echo '<script>
           if ( window.history.replaceState ) {
             window.history.replaceState( null, null, window.location.href ); 
           }
           window.location ="Rhio/index.php?pagina=Inicio";
       </script>';
          
                       
          }else{
           
              echo '<script>
              if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href ); 
              }
          </script>';

          echo '<div class="alert alert-danger">Error Login<br>Usuario y/o clave no coinciden</div>';
         
        }
      }
          }
      }
     }
 
 /*=============================================
  Seleccionar registros clientes
  ==============================================*/

  static public function ctrSeleccionarClientes(){
    $tabla ="clientes";
    $respuesta = ModeloFormularios::mdlSeleccionar($tabla, null, null);
    return $respuesta;

  }
   /*=============================================
  Seleccionar registros Marcas
  ==============================================*/

  static public function ctrSeleccionarMarcas(){
    $tabla ="marcas";
    $respuesta = ModeloFormularios::mdlSeleccionar($tabla, null, null);
    return $respuesta;

  }
   /*=============================================
  Seleccionar registros proveedores
  ==============================================*/

  static public function ctrSeleccionarProveedores(){
    $tabla ="proveedores";
    $respuesta = ModeloFormularios::mdlSeleccionar($tabla, null, null);
    return $respuesta;

  }
   /*=============================================
  Seleccionar registros Bancos
  ==============================================*/

  static public function ctrSeleccionarBancos(){
    $tabla ="bancos";
    $respuesta = ModeloFormularios::mdlSeleccionar($tabla, null, null);
    return $respuesta;

  }
}