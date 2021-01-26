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



$('.tablaCategoriasM').DataTable({

	"ajax":"ajax/tablaCategorias.ajaxM.php",
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


var SelectOp = $('#IDCODPRODET').val();


$('.tablaCodArticulos').DataTable({

	//destroy: true,
	"ajax":{
		"url": "ajax/tablaCodArticulos.ajax.php",
		"type": "POST",
		data : {action:"SLC",name:SelectOp}
	},
	
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



$( document ).ready(function() {
	var selectedOption = $('#IDCODPRODET').val();
	var table = $('#datatable_example').dataTable({
		"bProcessing": true,
		"ajax":{
			"url": "ajax/tablaCodArticulos.ajax.php",
			"type": "POST",
			data : {action:"SLC",name:selectedOption}
		},
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
REVISAR SI EL TITULO DE LA CATEGORIA YA EXISTE
=============================================*/


$(".validarCategoriaM").change(function(){

	$(".alert").remove();

	var categoriaM = $(this).val();

	var datos = new FormData();
	datos.append("validarCategoriaM", categoriaM);

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

    			$(".validarCategoriaM").parent().after('<div class="alert alert-warning">El título de la categoria ya existe en la base de datos</div>');

	    		$(".validarCategoriaM").val("");

    		}

	    }

   	})

})



/*=============================================
REVISAR SI EL CODIGO YA EXISTE
=============================================*/

$(".validarCodPatrimonial").change(function(){

	$(".alert").remove();

	var codigoPatr = $(this).val();

	if(codigoPatr.length>8&&codigoPatr.length<10){

		var datos = new FormData();
		datos.append("validarCodPatrimonial", codigoPatr);

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

					$(".validarCodPatrimonial").parent().after('<div class="alert alert-warning">Este codigo ya existe en la base de datos</div>');

					$(".validarCodPatrimonial").val("");

				}

			}

		})

	}else{

		$(".validarCodPatrimonial").parent().after('<div class="alert alert-warning">El codigo debe Contener 9 caracteres</div>');
		
	}


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

$(".tituloCategoriaM").change(function(){
  
	$(".rutaCategoriaM").val(limpiarURL($(".tituloCategoriaM").val()));

})

$("#modalEditarCategoriaM .tituloCategoriaM").change(function(){

	$("#modalEditarCategoriaM .rutaCategoriaM").val(limpiarURL($("#modalEditarCategoriaM .tituloCategoriaM").val()));

})


/*=============================================
AGREGAR MULTIMEDIA CON DROPZONE
=============================================*/

var arrayMFiles = [];

$(".multimediaAdd").dropzone({

	url: "/",
	addRemoveLinks: true,
	acceptedFiles: "image/jpeg, image/png",
	maxFilesize: 10,
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
				datosMultimedia.append("rutaM", $(".rutaArticulo").val());

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
EDITAR ARTICULO
=============================================*/

$('.tablaArticulos tbody').on("click", ".btnEditarArticulo", function(){
	
	$(".previsualizarImgAdd").html("");

	var idArticulo = $(this).attr("idArticulo");
	
	var datos = new FormData();
	datos.append("idArticulo", idArticulo);

	$.ajax({

		url:"ajax/articulos.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#modalEditarArticulo .idArticulo").val(respuesta[0]["idDetalleArticulo"]);
			$("#modalEditarArticulo .tituloArticulo").val(respuesta[0]["titulo"]);
			$("#modalEditarArticulo .rutaArticulo").val(respuesta[0]["ruta"]);
			$("#modalEditarArticulo .descripcionArticulo").val(respuesta[0]["descripcion"]);

			if(respuesta[0]["palabrasClave"] != null){

				$("#modalEditarArticulo .editarPalabrasClavesA").html('<div class="input-group">'+
	  
				'<span class="input-group-addon"><i class="fa fa-key"></i></span>'+ 

				'<input type="text" class="form-control input-lg tagsInput pClavesArticulo" value="'+respuesta[0]["palabrasClave"]+'" data-role="tagsinput">'+
				

				'</div>');

				$("#modalEditarArticulo .pClavesArticulo").tagsinput('items');

			}else{

				$("#modalEditarArticulo .editarPalabrasClavesA").html('<div class="input-group">'+
	  
				'<span class="input-group-addon"><i class="fa fa-key"></i></span>'+ 

				'<input type="text" class="form-control input-lg tagsInput pClavesArticulo" value="" data-role="tagsinput">'+

				'</div>');

				$("#modalEditarArticulo .pClavesArticulo").tagsinput('items');

			}

			if(respuesta[0]["multimedia"] != ""){
				
				var imagenesMultimedia = JSON.parse(respuesta[0]["multimedia"]);
				
				for(var i = 0; i < imagenesMultimedia.length; i++){

					$(".previsualizarImgAdd").append(

							'<div class="col-md-3">'+
							'<div class="thumbnail text-center">'+
								'<img class="imagenesRestantes" src="'+imagenesMultimedia[i].foto+'" style="width:100%">'+
								'<div class="removerImagen" style="cursor:pointer">Remove file</div>'+
							'</div>'+

							'</div>'

					);

					localStorage.setItem("multimediaAdd", JSON.stringify(imagenesMultimedia));

				}		

				/*=============================================
				CUANDO ELIMINAMOS UNA IMAGEN DE LA LISTA
				=============================================*/

				$(".removerImagen").click(function(){

					$(this).parent().parent().remove();

					var imagenesRestantes = $(".imagenesRestantes");
					var arrayImgRestantes = [];

					for(var i = 0; i < imagenesRestantes.length; i++){
						
						arrayImgRestantes.push({"foto":$(imagenesRestantes[i]).attr("src")})
						
					}

					localStorage.setItem("multimediaAdd", JSON.stringify(arrayImgRestantes));
					
				})

			}

			/*=============================================
			TRAEMOS LA CATEGORIA
			=============================================*/

			if(respuesta[0]["idCategoria"] != 0){
			
				var datosCategoria = new FormData();
				datosCategoria.append("idCategoria", respuesta[0]["idCategoria"]);
				

				$.ajax({

						url:"ajax/categorias.ajaxM.php",
						method: "POST",
						data: datosCategoria,
						cache: false,
						contentType: false,
						processData: false,
						dataType: "json",
						success: function(respuesta){

							$("#modalEditarArticulo .seleccionarCategoria").val(respuesta["idCategoria"]);
							$("#modalEditarArticulo .optionEditarCategoria").html(respuesta["titulo"]);

							
						}

					})

			}else{

				
				$("#modalEditarArticulo .optionEditarCategoria").html("SIN CATEGORÍA");

			}


			/*=============================================
			CARGAMOS LA IMAGEN PRINCIPAL
			=============================================*/

			$("#modalEditarArticulo .previsualizarPrincipalA").attr("src", respuesta[0]["portada"]);
			$("#modalEditarArticulo .antiguaFotoPrincipalA").val(respuesta[0]["portada"]);

			/*=============================================
			CARGAMOS EL PRECIO, PESO Y DIAS DE ENTREGA
			=============================================*/
			$("#modalEditarArticulo .precio").val(respuesta[0]["precio"]);
			$("#modalEditarArticulo .peso").val(respuesta[0]["peso"]);
			$("#modalEditarArticulo .disponible").val(respuesta[0]["disponible"]);


















			


			/*=============================================
			GUARDAR CAMBIOS DEL PRODUCTO
			=============================================*/	

			var multimediaArticulo = null;	

			$(".guardarCambiosArticulo").click(function(){

					/*=============================================
					PREGUNTAMOS SI LOS CAMPOS OBLIGATORIOS ESTÁN LLENOS
					=============================================*/
					

					if($("#modalEditarArticulo .tituloArticulo").val() != "" && 
					   $("#modalEditarArticulo .seleccionarCategoria").val() != "" && 
					   $("#modalEditarArticulo .descripcionArticulo").val() != ""){

							
						if(arrayMFiles.length > 0 && $("#modalEditarArticulo .rutaArticulo").val() != ""){

							var listaMultimedia = [];
							var finalFor = 0;

							for(var i = 0; i < arrayMFiles.length; i++){
								
								var datosMultimedia = new FormData();
								datosMultimedia.append("fileM", arrayMFiles[i]);
								datosMultimedia.append("rutaM", $("#modalEditarArticulo .rutaArticulo").val());

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

										listaMultimedia.push({"foto" : respuesta.substr(3)});
										multimediaArticulo = JSON.stringify(listaMultimedia);
										
										if(localStorage.getItem("multimediaAdd") != null){

											var jsonLocalStorage = JSON.parse(localStorage.getItem("multimediaAdd"));

											var jsonMultimediaAdd = listaMultimedia.concat(jsonLocalStorage);

											multimediaArticulo = JSON.stringify(jsonMultimediaAdd);												
										}

										if(multimediaArticulo == null){

												swal({
													title: "El campo de multimedia no debe estar vacío",
													type: "error",
													confirmButtonText: "¡Cerrar!"
												});

												return;
										}

										if((finalFor + 1) == arrayMFiles.length){

											editarMiArticulo(multimediaArticulo);
											finalFor = 0;

										}

										finalFor++;							
							
									}

								})

							}

						}else{
				
							var jsonLocalStorage = JSON.parse(localStorage.getItem("multimediaAdd"));

							multimediaArticulo = JSON.stringify(jsonLocalStorage);

							editarMiArticulo(multimediaArticulo);										
							
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
					
		}

	})

})






function editarMiArticulo(imagen){

	var idArticulo = $("#modalEditarArticulo .idArticulo").val();
	var tituloArticulo = $("#modalEditarArticulo .tituloArticulo").val();
	var rutaArticulo = $("#modalEditarArticulo .rutaArticulo").val();
	var seleccionarCategoria = $("#modalEditarArticulo .seleccionarCategoria").val();
	var descripcionArticulo = $("#modalEditarArticulo .descripcionArticulo").val();
	var pClavesArticulo = $("#modalEditarArticulo .pClavesArticulo").val();
	var precio = $("#modalEditarArticulo .precio").val();
	var peso = $("#modalEditarArticulo .peso").val();
	var disponible = $("#modalEditarArticulo .disponible").val();
	var antiguaFotoPrincipalA = $("#modalEditarArticulo .antiguaFotoPrincipalA").val();

	///alert(imagenFotoPrincipalA);

	var datosArticulo = new FormData();
	datosArticulo.append("idA", idArticulo);
	datosArticulo.append("editarArticulo", tituloArticulo);
	datosArticulo.append("rutaArticulo", rutaArticulo);
	datosArticulo.append("seleccionarCategoria", seleccionarCategoria);	
	datosArticulo.append("descripcionArticulo", descripcionArticulo);	
	datosArticulo.append("pClavesArticulo", pClavesArticulo);
	datosArticulo.append("precio", precio);
	datosArticulo.append("peso", peso);
	datosArticulo.append("disponible", disponible);

	if(imagen == null){

		multimediaArticulo = localStorage.getItem("multimediaAdd");
		datosArticulo.append("multimedia", multimediaArticulo);

	}else{

		datosArticulo.append("multimedia", imagen);
	}	

	datosArticulo.append("fotoPrincipal", imagenFotoPrincipalA);
	datosArticulo.append("antiguaFotoPrincipalA", antiguaFotoPrincipalA);

	$.ajax({
			url:"ajax/articulos.ajax.php",
			method: "POST",
			data: datosArticulo,
			cache: false,
			contentType: false,
			processData: false,
			success: function(respuesta){
									
				
				if(respuesta == "ok"){

					swal({
					  type: "success",
					  title: "El articulo ha sido cambiado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
						if (result.value) {

						localStorage.removeItem("multimediaAdd");
						localStorage.clear();
						window.location = "articulos";

						}
					})
				}else{
					swal({
						title: "ERROR...",
					      type: "error",
					      confirmButtonText: "¡Cerrar!"
						});
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
	  title: '¿Está seguro de borrar el articulo?',
	  text: "¡Si no lo está puede cancelar la accíón!",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar articulo!'
	}).then(function(result){
  
	  if(result.value){
  
		window.location = "index.php?ruta=articulos&idArticulo="+idArticulo+"&rutaCabecera="+rutaCabecera+"&imgPrincipal="+imgPrincipal;
  
	  }
  
	})
  

  
  })















/*=====================================================================================================================
CATEGORIAS
=====================================================================================================================*/



















/*=============================================
GUARDAR CATEGORIA
=============================================*/

$(".guardarCategoriaM").click(function(){

	if($(".tituloCategoriaM").val() != ""){

		agregarMiCategoriaM();

	}else{

		swal({
	      title: "Llenar todos los campos obligatorios",
	      type: "error",
	      confirmButtonText: "¡Cerrar!"
	    });

		return;
	}

})



function agregarMiCategoriaM(){

		var tituloCategoriaM = $(".tituloCategoriaM").val();
		var rutaCategoriaM = $(".rutaCategoriaM").val();

	 	var datosCategoriaM = new FormData();
		 datosCategoriaM.append("tituloCategoriaM", tituloCategoriaM);
		 datosCategoriaM.append("rutaCategoriaM", rutaCategoriaM);

		$.ajax({
				url:"ajax/articulos.ajax.php",
				method: "POST",
				data: datosCategoriaM,
				cache: false,
				contentType: false,
				processData: false,
				success: function(respuesta){
					
					if(respuesta == "ok"){

						swal({
						  type: "success",
						  title: "La categoria se ha guardado correctamente",
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
							title: "La categoria no se ha guardado correctamente",
							showConfirmButton: true,
							confirmButtonText: "Cerrar"
							})
					}

				}

		})

}



/*=============================================
EDITAR CATEGORIA
=============================================*/

$('.tablaCategoriasM tbody').on("click", ".btnEditarCategoriaM", function(){
	
	var idCategoriaM = $(this).attr("idCategoriaM");
	
	var datos = new FormData();
	datos.append("idCategoriaM", idCategoriaM);

	$.ajax({

		url:"ajax/articulos.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			
			$("#modalEditarCategoriaM .idCategoriaM").val(respuesta[0]["idCategoria"]);
			$("#modalEditarCategoriaM .tituloCategoriaM").val(respuesta[0]["titulo"]);
			$("#modalEditarCategoriaM .rutaCategoriaM").val(respuesta[0]["ruta"]);

			/*=============================================
			GUARDAR CAMBIOS DE CATEGORIA
			=============================================*/	

			$(".guardarCambiosCategoriaM").click(function(){
				
					/*=============================================
					PREGUNTAMOS SI LOS CAMPOS OBLIGATORIOS ESTÁN LLENOS
					=============================================*/
					
					if($("#modalEditarCategoriaM .tituloCategoriaM").val() != ""){
							
						editarMiCategoriaM();

					}else{

						 swal({
					      title: "Llenar todos los campos obligatorios",
					      type: "error",
					      confirmButtonText: "¡Cerrar!"
					    });

						return;

					}					

			})
					
		}

	})

})




function editarMiCategoriaM(){

	var idCategoriaM = $("#modalEditarCategoriaM .idCategoriaM").val();
	var tituloCategoriaM = $("#modalEditarCategoriaM .tituloCategoriaM").val();
	var rutaCategoriaM = $("#modalEditarCategoriaM .rutaCategoriaM").val();
	
	var datosCategoria = new FormData();
	datosCategoria.append("idC", idCategoriaM);
	datosCategoria.append("editarCategoriaM", tituloCategoriaM);
	datosCategoria.append("rutaCategoriaM", rutaCategoriaM);

	$.ajax({
			url:"ajax/articulos.ajax.php",
			method: "POST",
			data: datosCategoria,
			cache: false,
			contentType: false,
			processData: false,
			success: function(respuesta){
									
				if(respuesta == "ok"){

					swal({
					  type: "success",
					  title: "La Categoria ha sido cambiada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
							if (result.value) {
							
							window.location = "articulos";

							}
						});
				
				}else{
					swal({
						title: "ERROR MANITO",
					      type: "error",
					      confirmButtonText: "¡Cerrar!"
						});
				}

			}

	})
	
}



/*=============================================
ELIMINAR CATEGORIA
=============================================*/

$('.tablaCategoriasM tbody').on("click", ".btnEliminarCategoriaM", function(){

	var idCategoriaM = $(this).attr("idCategoriaM");

	swal({
	  title: '¿Está seguro de borrar la cartegoria?',
	  text: "¡Si no lo está puede cancelar la accíón!",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar categoria!'
	}).then(function(result){
  
	  if(result.value){
  
		window.location = "index.php?ruta=articulos&idCategoriaM="+idCategoriaM;
  
	  }
  
	})
  
  })








/*=====================================================================================================================
COD PRODUCTOS
=====================================================================================================================*/



/*=============================================
GUARDAR CODIGO
=============================================*/

$(".guardarCodPatrimonial").click(function(){

	if($(".codPatrimonial").val() != ""){

		agregarNuevoCodigo();
		
	}else{

		swal({
	      title: "Llenar todos los campos obligatorios",
	      type: "error",
	      confirmButtonText: "¡Cerrar!"
	    });

		return;
	}

})


function agregarNuevoCodigo(){

	var codigoPatrimonial = $(".codPatrimonial").val();
	var idDetalleArticulo = $(".idArticuloRef").val();
	var rutaArticulo = $(".rutaArticulo").val();

	var datosCodigo = new FormData();
	datosCodigo.append("codigoPatrimonial", codigoPatrimonial);
	datosCodigo.append("idDetalleArticulo", idDetalleArticulo);

	$.ajax({
			url:"ajax/articulos.ajax.php",
			method: "POST",
			data: datosCodigo,
			cache: false,
			contentType: false,
			processData: false,
			success: function(respuesta){
				
				if(respuesta == "ok"){

					swal({
					  type: "success",
					  title: "El codigo se ha guardado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
						if (result.value) {

						window.location = rutaArticulo;

						}
					})
				}else{
					swal({
						type: "error",
						title: "El codigo no se ha guardado correctamente",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
						})
				}

			}

	})

}






/*=============================================
ELIMINAR CODIGO
=============================================*/

$('.tablaCodArticulos tbody').on("click", ".btnEliminarArticulo", function(){

	var idCodArticulo = $(this).attr("idCodArticulo");
	var rutaCodArticulo = $(this).attr("rutaCodArticulo");

	swal({
	  title: '¿Está seguro de borrar la cartegoria?',
	  text: "¡Si no lo está puede cancelar la accíón!",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar categoria!'
	}).then(function(result){
  
	  if(result.value){
  
		window.location = "index.php?ruta="+rutaCodArticulo+"&idCodArticulo="+idCodArticulo+"&rutaCodArt="+rutaCodArticulo;
  
	  }
  
	})
  
  })