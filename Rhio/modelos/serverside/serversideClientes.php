<?php
require 'serverside.php';
$table_data->get('view_clientes','id_cliente', array('id_cliente', 'rnc', 'empresa', 'contacto', 'telefono1', 'telefono2', 'telefono3', 'direccion', 'mail'));
?>