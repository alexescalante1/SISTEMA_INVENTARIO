/*=============================================
CARGAR LA TABLA DINÁMICA DE PRODUCTOS
=============================================*/

// $.ajax({

// 	url:"ajax/tablaProductos.ajax.php",
// 	success:function(respuesta){
		
// 		console.log("respuesta", respuesta);

// 	}

// })

$('.tablaArticulos').DataTable({

	"ajax":"ajax/tablaArticulos.ajax.php",
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
ACTIVAR ARTICULO
=============================================*/
$('.tablaArticulos tbody').on("click", ".btnActivar", function(){

	var idArticulo = $(this).attr("idArticulo");
	var estadoArticulo = $(this).attr("estadoArticulo");

	var datos = new FormData();
 	datos.append("activarIdA", idArticulo);
  	datos.append("activarArticulo", estadoArticulo);

  	$.ajax({

	  url:"ajax/articulos.ajax.php",
	  method: "POST",
	  data: datos,
	  cache: false,
      contentType: false,
      processData: false,
      success: function(respuesta){    
          
          // console.log("respuesta", respuesta);

      }

  	})

	if(estadoArticulo == 0){

  		$(this).removeClass('btn-success');
  		$(this).addClass('btn-danger');
  		$(this).html('Desactivado');
  		$(this).attr('estadoArticulo',1);

  	}else{

  		$(this).addClass('btn-success');
  		$(this).removeClass('btn-danger');
  		$(this).html('Activado');
  		$(this).attr('estadoArticulo',0);

  	}

})



/*=============================================
REVISAR SI EL TITULO DEL ARTICULO YA EXISTE
=============================================*/


$(".validarArticulo").change(function(){

	$(".alert").remove();

	var articulo = $(this).val();

	var datos = new FormData();
	datos.append("validarArticulo", articulo);

	 $.ajax({
	    url:"ajax/articulos.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success:function(respuesta){

    		if(respuesta.length != 0){

    			$(".validarArticulo").parent().after('<div class="alert alert-warning">Este título de articulo ya existe en la base de datos</div>');

	    		$(".validarArticulo").val("");

    		}

	    }

   	})

})

/*=============================================
RUTA ARTICULO
=============================================*/

function limpiarURL(texto){
	var texto = texto.toLowerCase(); 
	texto = texto.replace(/[á]/, 'a');
	texto = texto.replace(/[é]/, 'e');
	texto = texto.replace(/[í]/, 'i');
	texto = texto.replace(/[ó]/, 'o');
	texto = texto.replace(/[ú]/, 'u');
	texto = texto.replace(/[ñ]/, 'n');
	texto = texto.replace(/ /g, "-")
	return texto;
  }
  
  $(".tituloArticulo").change(function(){
  
	  $(".rutaArticulo").val(limpiarURL($(".tituloArticulo").val()));
  
  })



/*=============================================
AGREGAR MULTIMEDIA CON DROPZONE
=============================================*/

var arrayMFiles = [];

$(".multimediaAdd").dropzone({

	url: "/",
	addRemoveLinks: true,
	acceptedFiles: "image/jpeg, image/png",
	maxFilesize: 2,
	maxFiles: 10,
	init: function(){

		this.on("addedfile", function(file){

			arrayMFiles.push(file);

			//console.log("arrayFiles", arrayMFiles);

		})

		this.on("removedfile", function(file){

			var index = arrayMFiles.indexOf(file);

			arrayMFiles.splice(index, 1);

			//console.log("arrayFiles", arrayMFiles);

		})

	}

})









/*=============================================
SUBIENDO LA FOTO PRINCIPAL
=============================================*/

var imagenFotoPrincipalA = null;

$(".fotoPrincipalA").change(function(){

	imagenFotoPrincipalA = this.files[0];
	
	/*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/

  	if(imagenFotoPrincipalA["type"] != "image/jpeg" && imagenFotoPrincipalA["type"] != "image/png"){

  		$(".fotoPrincipalA").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen debe estar en formato JPG o PNG!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else if(imagenFotoPrincipalA["size"] > 5000000){

  		$(".fotoPrincipalA").val("");

  		 swal({
		      title: "Error al subir la imagen",
		      text: "¡La imagen no debe pesar más de 2MB!",
		      type: "error",
		      confirmButtonText: "¡Cerrar!"
		    });

  	}else{

  		var datosImagen = new FileReader;
  		datosImagen.readAsDataURL(imagenFotoPrincipalA);

  		$(datosImagen).on("load", function(event){

  			var rutaImagen = event.target.result;

  			$(".previsualizarPrincipalA").attr("src", rutaImagen);

  		})

  	}

})





/*=============================================
GUARDAR EL ARTICULO
=============================================*/

var multimediaArticulo = null;	

$(".guardarArticulo").click(function(){

	/*=============================================
	PREGUNTAMOS SI LOS CAMPOS OBLIGATORIOS ESTÁN LLENOS
	=============================================*/

	if($(".tituloArticulo").val() != "" &&
	   $(".seleccionarCategoria").val() != "" &&
	   $(".descripcionArticulo").val() != ""){

	
		if(arrayMFiles.length > 0 && $(".rutaArticulo").val() != ""){

			var listaMultimedia = [];
			var finalFor = 0;

			for(var i = 0; i < arrayMFiles.length; i++){

				var datosMultimedia = new FormData();
				datosMultimedia.append("fileM", arrayMFiles[i]);
				datosMultimedia.append("ruta", $(".rutaArticulo").val());

				$.ajax({
					url:"ajax/articulos.ajax.php",
					method: "POST",
					data: datosMultimedia,
					cache: false,
					contentType: false,
					processData: false,
					beforeSend: function(){

						$(".modal-footer .preload").html(`


							<center>

								<img src="vistas/img/plantilla/status.gif" id="status" />
								<br>

							</center>

						`);

					},
					success: function(respuesta){

						$("#status").remove();
						
						listaMultimedia.push({"foto" : respuesta.substr(3)})
						multimediaArticulo = JSON.stringify(listaMultimedia);

						if(multimediaArticulo == null){

							swal({
								title: "El campo de multimedia no debe estar vacío",
								type: "error",
								confirmButtonText: "¡Cerrar!"
							});

							return;

						}

						if((finalFor + 1) == arrayMFiles.length){

							agregarMiArticulo(multimediaArticulo);
							finalFor = 0;

						}

						finalFor++;

					}

				})

			}

		}

	}else{

		 swal({
	      title: "Llenar todos los campos obligatorios",
	      type: "error",
	      confirmButtonText: "¡Cerrar!"
	    });

		return;
	}

})




function agregarMiArticulo(imagen){

		/*=============================================
		ALMACENAMOS TODOS LOS CAMPOS DE PRODUCTO
		=============================================*/

		var tituloArticulo = $(".tituloArticulo").val();
		var rutaArticulo = $(".rutaArticulo").val();
	   	var seleccionarCategoria = $(".seleccionarCategoria").val();
	    var descripcionArticulo = $(".descripcionArticulo").val();
	    var pClavesArticulo = $(".pClavesArticulo").val();
	    var precio = $(".precio").val();
	    var peso = $(".peso").val();
		var disponible = $(".disponible").val();
		

	 	var datosArticulo = new FormData();
		 datosArticulo.append("tituloArticulo", tituloArticulo);
		 datosArticulo.append("rutaArticulo", rutaArticulo);
		 datosArticulo.append("seleccionarCategoria", seleccionarCategoria);
		 datosArticulo.append("descripcionArticulo", descripcionArticulo);
		 datosArticulo.append("pClavesArticulo", pClavesArticulo);
		 datosArticulo.append("precio", precio);
		 datosArticulo.append("peso", peso);
		 datosArticulo.append("disponible", disponible);	

		 datosArticulo.append("multimedia", imagen);
		
		 datosArticulo.append("fotoPrincipal", imagenFotoPrincipalA);

		$.ajax({
				url:"ajax/articulos.ajax.php",
				method: "POST",
				data: datosArticulo,
				cache: false,
				contentType: false,
				processData: false,
				success: function(respuesta){
					
					// console.log("respuesta", respuesta);

					if(respuesta == "ok"){

						swal({
						  type: "success",
						  title: "El articulo ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "articulos";

							}
						})
					}else{
						swal({
							type: "error",
							title: "El articulo no se ha guardado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
							})
					}

				}

		})

}











/*=============================================
ELIMINAR ARTICULO
=============================================*/

$('.tablaArticulos tbody').on("click", ".btnEliminarArticulo", function(){


	var idArticulo = $(this).attr("idArticulo");
	var rutaCabecera = $(this).attr("rutaCabecera");
	var imgPrincipal = $(this).attr("imgPrincipal");
  
	swal({
	  title: '¿Está seguro de borrar el producto?',
	  text: "¡Si no lo está puede cancelar la accíón!",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar producto!'
	}).then(function(result){
  
	  if(result.value){
  
		window.location = "index.php?ruta=articulos&idArticulo="+idArticulo+"&rutaCabecera="+rutaCabecera+"&imgPrincipal="+imgPrincipal;
  
	  }
  
	})
  
  
  
  
  })