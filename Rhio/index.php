<?php

require_once 'controlador/Plantilla.Control.php';
require_once 'controlador/formulario.controlador.php';
require_once 'modelos/formulario.modelo.php';



$plantilla = new ControladorPlantillaS();

$plantilla -> CtrTraerPlantillaS();
$plantilla -> CtrTraerPlantillaI();



