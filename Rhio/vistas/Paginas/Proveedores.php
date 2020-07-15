<?php
$proveedores = ControladorFormularios::ctrSeleccionarProveedores();
/*echo '<pre>'; print_r($clientes); echo '</pre>';*/
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h4>Lista de Proveedores<span> <button id="btnNuevo" type="button" class="btn btn-success">Nuevo</button></span></h4>
           
        </div>
    </div>
</div>
    <div class="table-responsive-sm">
    <table id="example" class="table table-striped table-hover table-sm">
  <thead>
    <tr>
      <th>#</th>
      <th>RNC</th>
      <th>Empresa</th>
      <th>Teléfono1</th>
      <th>Teléfono2</th>
      <th>Acciones</th>
    </tr>
  </thead>
  
<tbody>



<?php foreach($proveedores as $key => $value): ?>

    <tr>
     <td style="font-size:80%"><?php echo $key+1 ;?></td>
      <td style="font-size:80%"><?php echo $value["rnc"]; ?></td>
      <td style="font-size:80% "><?php echo $value["proveedor"]; ?></td>
      <td style="font-size:80%"><?php echo $value["telefono1"]; ?></td>
      <td style="font-size:80%"><?php echo $value["telefono2"]; ?></td>
      <td>
      <div class="btn-group  btn-group-sm">
      <button class="btn btn-primary btn-xs"><i class="far fa-eye"></i></button>
      <button class="btn btn-warning btn-xs"><i class="fas fa-pencil-alt"></i></button>
      <button class="btn btn-danger btn-xs"><i class="fas fa-trash-alt"></i></button>
      </div>
      </td>
    </tr>

<?php endforeach ?>
    
  
  </tbody>
</table>
</div>


