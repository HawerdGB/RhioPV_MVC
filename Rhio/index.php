<?php

require_once "controlador/Plantilla.control.php";
require_once "controlador/formulario.controlador.php";
require_once "modelos/formulario.modelo.php";



$plantilla = new ControladorPlantillaS();

$plantilla -> CtrTraerPlantillaS();
$plantilla -> CtrTraerPlantillaI();



