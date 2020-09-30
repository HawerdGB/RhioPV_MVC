<?php
$bancos = ControladorFormularios::ctrSeleccionarBancos();
/*echo '<pre>'; print_r($clientes); echo '</pre>';*/
?>

<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h4>Bancos<span> <button id="btnNuevo" type="button" class="btn btn-success">Nuevo</button></span></h4>
           
        </div>
    </div>
</div>
    <div class="container">
    <div class="table-responsive-sm">
    <table id="mitabla" class="table table-striped table-hover">
  <thead>
    <tr>  
    <th >#</th>
      <th >Banco</th>
      <th>Acciones</th>
      </tr>
  </thead>
  
<tbody>

<?php foreach($bancos as $key => $value): ?>

    <tr>
      <td style="font-size:90%"><?php echo $key+1 ;?></td>
      <td style="font-size:90%"><?php echo $value["BANCO"]; ?></td>
      <td>
      <div class="btn-group  btn-group-sm">
      <button type="button" class="btn btn-primary " data-toggle="modal" id="eyebtn" data-target="#mimodal"><i class="far fa-eye"></i></button>
      <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
      <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
      </div>
      </td>
    </tr>

<?php endforeach ?>
    
  
  </tbody>
</table>
</div>
<!-- Modal -->
<div class="modal fade" id="mimodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Bancos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!--fin modal-->
</div>

