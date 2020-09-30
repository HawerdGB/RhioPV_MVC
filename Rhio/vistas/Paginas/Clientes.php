<?php
 #$_SESSION["validarIngreso"] = 'ok';
//$clientes = ControladorFormularios::ctrSeleccionarClientes();
/*echo '<pre>'; print_r($clientes); echo '</pre>';*/
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <h4>
        Lista de Clientes
        <span>
          <button
            id="btnNuevo"
            title="Agregar Nuevo Registro"
            type="button"
            class="btn btn-success"
            data-toggle="modal"
          >
            <i class="material-icons">library_add</i>
          </button>
        </span>
      </h4>
    </div>
  </div>
</div>
<div class="container caja">
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablaClientes" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>Id</th>
                            <th>RNC</th>
                            <th>Empresa</th>                                
                            <th>Contacto</th>  
                            <th>Telefono1</th>
                            <th>Telefono2</th>
                            <th>Telefono3</th>
                            <th>Direccion</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>                           
                    </tbody>        
                </table>               
            </div>
            </div>
        </div>  
    </div>   
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formClientes">    
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-3">
                    <div class="form-group">
                    <label for="" class="col-form-label">RNC:</label>
                    <input type="text" class="form-control" id="rnc">
                    </div>
                    </div>
                    <div class="col-lg-9">
                    <div class="form-group">
                    <label for="" class="col-form-label">Empresa</label>
                    <input type="text" class="form-control" id="empresa">
                    </div> 
                    </div>    
                </div>
                <div class="row"> 
                    <div class="col-lg-12">
                    <div class="form-group">
                    <label for="" class="col-form-label">Contacto</label>
                    <input type="text" class="form-control" id="contacto">
                    </div>               
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg-4">
                    <div class="form-group">
                    <label for="" class="col-form-label">Telefono1</label>
                    <input type="text" class="form-control" id="telefono1">
                    </div>               
                    </div>
                     <div class="col-lg-4">
                    <div class="form-group">
                    <label for="" class="col-form-label">Telefono2</label>
                    <input type="text" class="form-control" id="telefono2">
                    </div>               
                    </div>
                     <div class="col-lg-4">
                    <div class="form-group">
                    <label for="" class="col-form-label">Telefono3</label>
                    <input type="text" class="form-control" id="telefono3">
                    </div>               
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label for="" class="col-form-label">Direccion</label>
                        <input type="text" class="form-control" id="direccion">
                        </div>
                    </div>    
                    <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">Email</label>
                        <input type="text" class="form-control" id="mail">
                        </div>            
                    </div>    
                </div>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  

