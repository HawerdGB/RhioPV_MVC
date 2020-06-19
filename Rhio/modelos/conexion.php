<?php

class Conexion{

    static public function conectar(){

    $link = new PDO("mysql:host=localhost;dbname=rhiopv","hawerd","hlgb2172");

    $link->exec("set names utf8");

    return $link;
    }
}