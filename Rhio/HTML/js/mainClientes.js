$(document).ready(function() {
    var id_cliente, opcion;
    opcion = 4;
        
    tablaClientes = $('#tablaClientes').DataTable({  
               "ajax":{            
            "url": "modelos/frmclientes.modelo.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
            "dataSrc":""
        },
        "columns":[
            {"data": "id_cliente"},
            {"data": "rnc"},
            {"data": "empresa"},
            {"data": "contacto"},
            {"data": "telefono1"},
            {"data": "telefono2"},
            {"data": "telefono3"},
            {"data": "direccion"},
            {"data": "mail"},
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
        ],
        "language": {
            "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando  del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando  del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        },
        "buttons": {
            "copy": "Copiar",
            "colvis": "Visibilidad"
        }
        },
        //aqui
        responsive: "true",
        dom: 'Blfrtip',       
        buttons:[ 
			{
				extend:    'excelHtml5',
				text:      '<i class="fas fa-file-excel"></i> ',
				titleAttr: 'Exportar a Excel',
				className: 'btn btn-success'
			},
			{
				extend:    'pdfHtml5',
				text:      '<i class="fas fa-file-pdf"></i> ',
				titleAttr: 'Exportar a PDF',
				className: 'btn btn-danger'
			},
			{
				extend:    'print',
				text:      '<i class="fa fa-print"></i> ',
				titleAttr: 'Imprimir',
				className: 'btn btn-info'
			},
		]	        
        //aqui
    });  
    
  
    
    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $('#formClientes').submit(function(e){                         
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        rnc = $.trim($('#rnc').val());    
        empresa = $.trim($('#empresa').val());
        contacto = $.trim($('#contacto').val());    
        telefono1 = $.trim($('#telefono1').val());
        telefono2 = $.trim($('#telefono2').val()); 
        telefono3 = $.trim($('#telefono3').val()); 
        direccion = $.trim($('#direccion').val());
        mail = $.trim($('#mail').val());                            
            $.ajax({
              url: "modelos/frmclientes.modelo.php",
              type: "POST",
              datatype:"json",    
              data:  {id_cliente:id_cliente, rnc:rnc, empresa:empresa, contacto:contacto, telefono1:telefono1, telefono2:telefono2, telefono3:telefono3, direccion:direccion, mail:mail ,opcion:opcion},    
              success: function(data) {
                tablaClientes.ajax.reload(null, false);
               }
            });			        
        $('#modalCRUD').modal('hide');											     			
    });
            
     
    
    //para limpiar los campos antes de dar de Alta una Persona
    $("#btnNuevo").click(function(){
        opcion = 1; //alta           
        id_cliente=null;
        $("#formClientes").trigger("reset");
        $(".modal-header").css( "background-color", "#5cb85c");
        $(".modal-header").css( "color", "white" );
        $(".modal-title").text("Nuevo Cliente");
        $('#modalCRUD').modal('show');	    
    });
    
    //Editar        
    $(document).on("click", ".btnEditar", function(){		        
        opcion = 2;//editar
        fila = $(this).closest("tr");	        
        id_cliente = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
        rnc = fila.find('td:eq(1)').text();
        empresa = fila.find('td:eq(2)').text();
        contacto = fila.find('td:eq(3)').text();
        telefono1 = fila.find('td:eq(4)').text();
        telefono2 = fila.find('td:eq(5)').text();
        telefono3 = fila.find('td:eq(6)').text();
        direccion = fila.find('td:eq(7)').text();
        mail = fila.find('td:eq(8)').text();
        $("#rnc").val(rnc);
        $("#empresa").val(empresa);
        $("#contacto").val(contacto);
        $("#telefono1").val(telefono1);
        $("#telefono2").val(telefono2);
        $("#telefono3").val(telefono3);
        $("#direccion").val(direccion);
        $("#mail").val(mail);
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white" );
        $(".modal-title").text("Editar Cliente");		
        $('#modalCRUD').modal('show');		   
    });
    
    //Borrar
    $(document).on("click", ".btnBorrar", function(){
        fila = $(this);           
        id_cliente = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
        opcion = 3; //eliminar        
        var respuesta = confirm("¿Está seguro de borrar el registro "+id_cliente+"?");                
        if (respuesta) {            
            $.ajax({
              url:  "modelos/frmclientes.modelo.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion, id_cliente:id_cliente},    
              success: function() {
                  tablaClientes.row(fila.parents('tr')).remove().draw();                  
               }
            });	
        }
     });
         
    });    