


$('.tablaNotificaciones').DataTable({

	"ajax":"ajax/tablaNotificaciones.ajax.php",
	"deferRender": true,
	"retrieve": true,
	"processing": true,
    "language": {

			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
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
			}

	}

});


/*=============================================
ACTUALIZAR NOTIFICACIONES
=============================================*/

$(".actualizarNotificaciones").click(function(e){

	e.preventDefault();

	var item = $(this).attr("item");

	var datos = new FormData();
 	datos.append("item", item );

  	$.ajax({

  		 url:"ajax/notificaciones.ajax.php",
  		 method: "POST",
	  	data: datos,
	  	cache: false,
      	contentType: false,
      	processData: false,
      	success: function(respuesta){

  		  	if(respuesta == "ok"){

      	    	if(item == "nuevosUsuarios"){

      	    		window.location = "usuarios";
      	    	}

      	    	if(item == "nuevasVentas"){

      	    		window.location = "ventas";
      	    	}

      	    	if(item == "nuevasVisitas"){

      	    		window.location = "visitas";
      	    	}

      	    }

      	 }

  	})
})


/*=============================================
ELIMINAR CATEGORIA
=============================================*/

$('.tablaNotificaciones tbody').on("click", ".btnEliminarNotificacion", function(){

	var idNotificacion = $(this).attr("idNotificacion");

	swal({
	  title: '¿Está seguro de borrar esta notificacion?',
	  text: "¡Si no lo está puede cancelar la accíón!",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar notificacion!'
	}).then(function(result){
  
	  if(result.value){
  
		window.location = "index.php?ruta=notificacionesM&idNotificacion="+idNotificacion;
  
	  }
  
	})
  
  })