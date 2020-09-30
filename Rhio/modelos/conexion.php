<?php

class Conexion{

    public static function Conectar() {        
        define('servidor', 'localhost');
        define('nombre_bd', 'rhiopv');
        define('usuario', 'hawerd');
        define('password', 'hlgb2172');					        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion;
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());
        }
    }

    //static public function conectar(){

    //$link = new PDO("mysql:host=localhost;dbname=rhiopv","hawerd","hlgb2172");

    //$link->exec("set names utf8");

   // return $link;
    }
