<?php

require_once "conexion.php";

class ModeloFormularios{

   /*==========================================================
                    Insertar en Usuarios
  ===========================================================*/
    static public function mdlRegistro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, clave, mail, usuario) VALUES
        (:nombre, :clave, :mail, :usuario)");

        $stmt->bindParam(":nombre",$datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":clave",$datos["clave"], PDO::PARAM_STR);
        $stmt->bindParam(":mail",$datos["mail"], PDO::PARAM_STR);
        $stmt->bindParam(":usuario",$datos["usuario"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";
        }else{

            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt->close();

        $stmt = null;
    }
 /*==========================================================
                    Insertar en Clientes
  ===========================================================*/
  static public function mdlRegistroClientes($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(rnc, empresa, contacto, telefono1,
    telefono2, telefono3, direccion, mail) VALUES
    (:rnc, :empresa, :contacto, :telefono1, :telefono2, :telefono3, :direccion, :mail)");

    $stmt->bindParam(":rnc",$datos["rnc"], PDO::PARAM_STR);
    $stmt->bindParam(":empresa",$datos["empresa"], PDO::PARAM_STR);
    $stmt->bindParam(":contacto",$datos["contacto"], PDO::PARAM_STR);
    $stmt->bindParam(":telefono1",$datos["telefono1"], PDO::PARAM_STR);
    $stmt->bindParam(":telefono2",$datos["telefono2"], PDO::PARAM_STR);
    $stmt->bindParam(":telefono3",$datos["telefono3"], PDO::PARAM_STR);
    $stmt->bindParam(":direccion",$datos["direccion"], PDO::PARAM_STR);
    $stmt->bindParam(":mail",$datos["mail"], PDO::PARAM_STR);

    if($stmt->execute()){

        return "ok";
    }else{

        print_r(Conexion::conectar()->errorInfo());
    }
    $stmt->close();

    $stmt = null;
}

 /*==========================================================
  Seleccionar registros de la tablas seleccionadas
  ===========================================================*/
static public function mdlSeleccionar($tabla, $item, $valor){

    if($item == null && $valor == null){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

    $stmt->execute();

    return $stmt -> fetchAll();
    }else{
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla 
        where $item=:$item");

        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
        
        

    $stmt->execute();

    
    return $stmt -> fetch(); 

    }

    
    
    $stmt->close();

    $stmt = null;

}

}