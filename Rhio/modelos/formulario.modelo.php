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
  Seleccionar todos los registros de la tablas seleccionadas
  ===========================================================*/
static public function mdlSeleccionar($tabla, $item, $valor){

    if($item == null && $valor == null){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

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