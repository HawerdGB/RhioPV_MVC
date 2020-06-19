<?php
$marcas = ControladorFormularios::ctrSeleccionarMarcas();
/*echo '<pre>'; print_r($clientes); echo '</pre>';*/
?>

<div class="container">
    <h3>Marcas</h3>
    </div>
    <div class="table-responsive-sm">
   
<table id='example' class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
              <th>#</th>
              <th>Marca</th>
              <th>Acciones</th>    
            </tr>
        </thead>
        <tbody>
            
<?php foreach($marcas as $key => $value): ?>

<tr>
  <td style="font-size:90%"><?php echo $key+1 ;?></td>
   <td style="font-size:90%"><?php echo $value["marca"]; ?></td>
  <td>
  <div class="btn-group">
  <button class="btn btn-success"><i class="far fa-eye"></i></button>
  <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
  <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
  </div>
  </td>
</tr>

<?php endforeach ?>

        </tbody>
     
    </table>
    </div>