<?php
session_start();

class ControladorFormularios{

    /*==================================
          Registro Clientes
      ===================================*/

    static public function ctrRegistroClientes(){
      if(isset($_POST["rEmpresa"])){
        $tabla ='clientes';
        $datos = array("rnc"=>$_POST["rRNC"],
                      "empresa" =>$_POST["rEmpresa"],
                      "contacto" =>$_POST["rContacto"],
                      "telefono1"=>$_POST["rTelefono1"],
                      "telefono2"=>$_POST["rTelefono2"],
                      "telefono3"=>$_POST["rTelefono3"],
                      "direccion"=>$_POST["rDireccion"],
                      "mail"=>$_POST["rEmail"]);
        $respuesta = ModeloFormularios::mdlRegistroClientes($tabla, $datos);
      
        return $respuesta;
    }
     }
 
    
 /*=============================================
  Ingreso al sistema
  ==============================================*/
    public function ctrIngreso(){
        
        if(isset($_POST["iusuario"])){

          $tabla = "usuarios";
          $item ="usuario";
          $valor = $_POST["iusuario"];
        
          $respuesta1 = ModeloFormularios::mdlSeleccionar($tabla, $item, $valor);
            if(empty($respuesta1)){
        
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
              
            if(($respuesta1["clave"] == $_POST["iclave"]) && 
            ($respuesta1["usuario"] == $_POST["iusuario"])){
            
            
            $_SESSION["validarIngreso"] = 'ok';
            $_SESSION["nombre"] = $respuesta1["nombre"];
            $_SESSION["nivel"] = $respuesta1["nivel"];
            $_SESSION["imagen"] = $respuesta1["imagen"];

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