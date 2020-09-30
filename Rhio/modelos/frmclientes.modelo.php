<?php
include_once "conexion.php";
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$rnc = (isset($_POST['rnc'])) ? $_POST['rnc'] : '';
$empresa = (isset($_POST['empresa'])) ? $_POST['empresa'] : '';
$contacto = (isset($_POST['contacto'])) ? $_POST['contacto'] : '';
$telefono1 = (isset($_POST['telefono1'])) ? $_POST['telefono1'] : '';
$telefono2 = (isset($_POST['telefono2'])) ? $_POST['telefono2'] : '';
$telefono3 = (isset($_POST['telefono3'])) ? $_POST['telefono3'] : '';
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : '';
$mail = (isset($_POST['mail'])) ? $_POST['mail'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id_cliente = (isset($_POST['id_cliente'])) ? $_POST['id_cliente'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO clientes (rnc, empresa, contacto, telefono1, telefono2, telefono3, direccion, mail) VALUES('$rnc', '$empresa', '$contacto', '$telefono1', '$telefono2','$telefono3', '$direccion', '$mail') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM clientes ORDER BY id_cliente DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE clientes SET rnc='$rnc', empresa='$empresa', contacto='$contacto', telefono1='$telefono1', telefono2='$telefono2', telefono3='$telefono3', direccion='$direccion', mail='$mail' WHERE id_cliente='$id_cliente' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM clientes WHERE id_cliente='$id_cliente' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM clientes WHERE id_cliente='$id_cliente' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM clientes";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;