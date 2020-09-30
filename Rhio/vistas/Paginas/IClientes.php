<?php

if(isset($_GET["id"])){

    $item = "id_cliente";
    $valor = $_GET["id"];

    $cliente = ControladorFormularios::ctrSeleccionarUnCliente($item, $valor);
  //  echo '<pre>'; print_r($cliente); echo '</pre>';

}
?>

<div class="container">
    <h4>Clientes</h4>
    <form  method="post">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputRNC">RNC</label>
                <input name="rRNC" type="text" class="form-control" value="<?php echo $cliente["rnc"];?>" id="inputRNC" placeholder="RNC" >
            </div>
            <div class="form-group col-md-8">
                <label for="inputEmpresa">Empresa</label>
                <input name="rEmpresa" type="text" class="form-control" value="<?php echo $cliente["empresa"];?>" id="inputEmpresa" placeholder="Nombre de la empresa"  >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputTelefono1">Telefono</label>
                <input  name="rTelefono1" type="text" class="form-control" value="<?php echo $cliente["telefono1"];?>" id="inputTelefono1" placeholder="Telefono Principal">
            </div>
            <div class="form-group col-md-4">
                <label for="inpuTelefono2">Telefono 2</label>
                <input name="rTelefono2" type="text" class="form-control" value="<?php echo $cliente["telefono2"];?>" id="inputTelefono2" placeholder="Telefono Otro">
                    
            </div>
            <div class="form-group col-md-4">
                <label for="inpuTelefono3">Telefono 3</label>
                <input name="rTelefono3" type="text" class="form-control" value="<?php echo $cliente["telefono3"];?>" id="inputTelefono3" placeholder="Telefono Otro">
                    
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input name="rEmail" type="email" class="form-control" value="<?php echo $cliente["mail"];?>" id="inputEmail4" placeholder="Email" >
            </div>
            <div class="form-group col-md-6">
                <label for="inputContacto">Contacto</label>
                <input  name="rContacto" type="text" class="form-control" value="<?php echo $cliente["contacto"];?>" id="inputContacto" placeholder="Nombre Contacto">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Direccion</label>
            <input type="text" class="form-control" value="<?php echo $cliente["direccion"];?>" id="inputAddress" placeholder="Calle, No. Casa/Edif. Apto., Sector"
                name="rDireccion">
        </div>
    <div class="container" align='right'>
            <div class="btn-group" role="group" pull-right>
                <button type="submit" class="btn btn-primary" style="margin: 5px">Grabar</button>
                <button type="button"  class="btn btn-success" style="margin: 5px" onclick="location.href='index.php?pagina=Clientes'">Volver</button>
            </div>
    </div>
      
    </form>


</div>