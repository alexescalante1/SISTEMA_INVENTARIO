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


$('.tablaPrestarArticulos').DataTable({
	
	"ajax":"ajax/tablaPrestarArticulos.ajax.php",
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


$('.tablaGestorPrestamos').DataTable({
	
	"ajax":"ajax/tablaGestorPrestarArticulos.ajax.php",
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
DAR DE BAJA CODIGO
=============================================*/
$('.tablaCodArticulos tbody').on("click", ".btnBaja", function(){

	var idCodArticulo = $(this).attr("idCodArticulo");
	var estadoCodArticulo = $(this).attr("estadoCodArticulo");

	var datos = new FormData();
 	datos.append("estadoIdCodA", idCodArticulo);
  	datos.append("estadoCodArticulo", estadoCodArticulo);

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

	if(estadoCodArticulo == 0){

  		$(this).removeClass('btn-success');
  		$(this).addClass('btn-danger');
  		$(this).html('Baja');
  		$(this).attr('estadoCodArticulo',1);

  	}else{

  		$(this).addClass('btn-success');
  		$(this).removeClass('btn-danger');
  		$(this).html('Activo');
  		$(this).attr('estadoCodArticulo',0);

  	}

})


/*=============================================
MANTENIMIENTO CODIGO
=============================================*/
$('.tablaCodArticulos tbody').on("click", ".btnMantenimiento", function(){

	var idCodArticulo = $(this).attr("idCodArticulo");
	var estadoCodArticulo = $(this).attr("estadoCodArticulo");

	//$('.'+idCodArticulo).attr('estadoCodArticuloP',1);

	var datos = new FormData();
 	datos.append("estadoIdCodA", idCodArticulo);
  	datos.append("estadoCodArticulo", estadoCodArticulo);

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

	if(estadoCodArticulo == 1){
		
		$(this).addClass('btn-success');
  		$(this).removeClass('btn-warning');
  		$(this).html('Funcional');
		$(this).attr('estadoCodArticulo',3);

  	}else{

		$(this).removeClass('btn-success');
  		$(this).addClass('btn-warning');
  		$(this).html('Mantenimiento');
		$(this).attr('estadoCodArticulo',1);

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

				'<input type="text" style="width:100%;" class="form-control input-lg tagsInput pClavesArticulo" value="'+respuesta[0]["palabrasClave"]+'" data-role="tagsinput">'+
				

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




















/*=============================================
PRESTAR ARTICULO
=============================================*/

$('.tablaPrestarArticulos tbody').on("click", ".btnPrestarArticulo", function(){
	
	$(".previsualizarImgAdd").html("");

	const tituloV = document.getElementById("TituloArticuloP");

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
			
			$("#modalPrestarArticulo .idDetalleArticulo").val(respuesta[0]["idDetalleArticulo"]);
			$("#modalPrestarArticulo .tituloArticulo").val(respuesta[0]["titulo"]);
			
			
			/*=============================================
			CARGAMOS LA IMAGEN PRINCIPAL
			=============================================*/

			$("#modalPrestarArticulo .previsualizarPrincipalA").attr("src", respuesta[0]["portada"]);







			var datosUnDisponibles = new FormData();
			datosUnDisponibles.append("UnDisponibles", respuesta[0]["idDetalleArticulo"]);
			
			$.ajax({

					url:"ajax/articulos.ajax.php",
					method: "POST",
					data: datosUnDisponibles,
					cache: false,
					contentType: false,
					processData: false,
					dataType: "json",
					success: function(stock){

						tituloV.innerHTML = "<h2 style='color:rgb(83, 83, 83);text-transform: uppercase;margin-top:-4px;margin-bottom:20px;'>"+respuesta[0]["titulo"]+"</h2><h5>PRECIO : S/."+respuesta[0]["precio"]+".00</h5><h5>PESO : "+respuesta[0]["peso"]+"kg</h5><h5>STOCK: "+stock[0]+" Unidades</h5>";
			
						//console.log(stock[0]);
						
						$(".selecNumCodigosArticulo").html('<option value="1">1</option>');

						var spantestemodeloNC = $('.selecNumCodigosArticulo').html();
						var spantestemodelo_strinfNC = spantestemodeloNC.toString();
						var CodNume = '';


						if(stock[0]<15){

							if(stock[0]==0){

								$(".selecNumCodigosArticulo").html('<option value="0">0</option>');

								swal({
									title: "No Hay Stock",
									type: "error",
									confirmButtonText: "¡Cerrar!"
								});

							}else{

								for(var o = 1; o <= stock[0]; o++){
									CodNume = CodNume + '<option value="'+o+'">'+o+'</option>';
								}

								spantestemodelo_strinfNC = spantestemodelo_strinfNC.replace('<option value="1">1</option>',CodNume);

								$(".selecNumCodigosArticulo").html(spantestemodelo_strinfNC);

							}
						
						}else{

							for(var o = 1; o <= 15; o++){
								CodNume = CodNume + '<option value="'+o+'">'+o+'</option>';
							}

							spantestemodelo_strinfNC = spantestemodelo_strinfNC.replace('<option value="1">1</option>',CodNume);

							$(".selecNumCodigosArticulo").html(spantestemodelo_strinfNC);
						}

						camposCodigos();

					}

			})


			/*=============================================
			GUARDAR CAMBIOS DEL PRESTAMO
			=============================================*/	

					
		}

	})

})


/*=============================================
REVISAR SI EL USUARIO EXISTE
=============================================*/


$(".validarUsuarioP").change(function(){

	$(".alert").remove();

	var codUser = $(this).val();

	var datos = new FormData();
	datos.append("validarUsuarioP", codUser);

	 $.ajax({
	    url:"ajax/usuarios.ajax.php",
	    method:"POST",
	    data: datos,
	    cache: false,
	    contentType: false,
	    processData: false,
	    dataType: "json",
	    success:function(respuesta){

			//console.log(respuesta);
    		if(!respuesta){

    			$(".validarUsuarioP").parent().after('<div class="alert alert-warning">Este Usuario No Existe</div>');
				$("#modalPrestarArticulo .nombreUsuario").val("");

    		}else{

				$("#modalPrestarArticulo .nombreUsuario").val(respuesta["nombre"]);
				
			}

	    }

   	})

})


/*=============================================
LISTAR CODIGOS
=============================================*/

function camposCodigos(){
	

	$("#span-modelo-listar-codigos").html('<div class="form-group"><div class="input-group"><span class="input-group-addon"><i class="fa fa-th"></i></span><select class="form-control input-lg seleccionarCodigoArticulo-0 validarCod" onchange="getval(this);"><option value="">CODIGO</option><option>LIST</option></select></div></div>');

    var spantestemodelo = $('#span-modelo-listar-codigos').html();
    var spantestemodelo_strinf = spantestemodelo.toString();
	
    var campos = $('.selecNumCodigosArticulo').val();

	var idartt = $('.idDetalleArticulo').val();

	var CodNume = '';

	var idDetalleArticulo = new FormData();
	idDetalleArticulo.append("idDetalleArticuloCOD", idartt);

	$.ajax({

		url:"ajax/articulos.ajax.php",
		method: "POST",
		data: idDetalleArticulo,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function(respuesta){

			respuesta.forEach(funcionForEach);

			function funcionForEach(item, index){

				//if(item["estado"]==1){
					//console.log(item["codigoPatrimonial"]);
					CodNume = CodNume + '<option value="'+item["codigoPatrimonial"]+'Y'+item["idArticulo"]+'">'+item["codigoPatrimonial"]+'</option>';
				//}

				/*$("#modalEditarProducto .seleccionarSubCategoria").append(

					'<option value="'+item["id"]+'">'+item["subcategoria"]+'</option>'

				)*/

			}

			spantestemodelo_strinf = spantestemodelo_strinf.replace('<option>LIST</option>',CodNume);


			var i;
			i=1;

			var texto = '';
			while(i<=campos){
			texto = texto + spantestemodelo_strinf.replace(/-0/g,'-' + i.toString());
			i = i + 1; 
			}

			$("#span-real-listar-codigos").html(texto);

		}

	})
	
	
}

/*=============================================
REVISAR LOS CODIGOS A PRESTAR NO SON IGUALES
=============================================*/
function getval(sel)
{
    $(".alert").remove();
	//alert(sel.value);
	
	var NumCodArticulos = $('.selecNumCodigosArticulo').val();
	
	var listaCodigos = {};
	for(var k=1;k<=NumCodArticulos;k++){

		listaCodigos[k] = $('.seleccionarCodigoArticulo-'+k).val();

	}

	//console.log(listaCodigos);

	for(var k=1;k<NumCodArticulos;k++){

		for(var n=k+1;n<=NumCodArticulos;n++){

			if(listaCodigos[n]!=''){

				//console.log("epa");

				if(listaCodigos[k]==listaCodigos[n]){

					//console.log(k+"-"+n);
					
					$(sel).parent().after('<div class="alert alert-warning">El Codigo Ya esta seleccionado</div>');
					$(sel).val("");
					
					return;
				}

			}
			
		}
		
	}
	//$(sel).parent().after('<div class="alert alert-warning">El Codigo Se Repite</div>');
	//$(sel).val("");
}


/*=============================================
GUARDAR PRESTAMO
=============================================*/


$(".guardarPrestamo").click(function(){

	var NumCodArticulos = $('.selecNumCodigosArticulo').val();

	if(NumCodArticulos==0){
		
		swal({
			title: "No Hay Stock",
			type: "error",
			confirmButtonText: "¡Cerrar!"
		});

		return;

	}

	var listaCodigos = {};

	for(var k=1;k<=NumCodArticulos;k++){

		if(!$('.seleccionarCodigoArticulo-'+k).val()){

			swal({
				title: "Llenar todos los campos del codigo",
				type: "error",
				confirmButtonText: "¡Cerrar!"
			});
	
			return;
		}

		listaCodigos[k] = $('.seleccionarCodigoArticulo-'+k).val();

	}

	/*=============================================
	PREGUNTAMOS SI LOS CAMPOS OBLIGATORIOS ESTÁN LLENOS
	=============================================*/
	
	if($("#modalPrestarArticulo .nombrePrestamista").val() != "" && 
	   $("#modalPrestarArticulo .codUsuario").val() != "" && 
	   $("#modalPrestarArticulo .selecDiasPrestamo").val() != ""){
		

		var nombrePrestamista = $(".nombrePrestamista").val();
		var nombreUsuario = $(".nombreUsuario").val();
	   	var codUsuario = $(".codUsuario").val();
	    var selecDiasPrestamo = $(".selecDiasPrestamo").val();

	 	var datosPrestamo = new FormData();
		 datosPrestamo.append("nombrePrestamista", nombrePrestamista);
		 datosPrestamo.append("nombreUsuario", nombreUsuario);
		 datosPrestamo.append("codUsuario", codUsuario);
		 datosPrestamo.append("selecDiasPrestamo", selecDiasPrestamo);

		$.ajax({
				url:"ajax/prestamos.ajax.php",
				method: "POST",
				data: datosPrestamo,
				cache: false,
				contentType: false,
				processData: false,
				success: function(respuesta){
					
					// expected output: "The quick brown fox jumps over the lazy ferret. If the dog reacted, was it really lazy?"

					//console.log(idDetArticulo+' - '+respuesta);

					for(var k=1;k<=NumCodArticulos;k++){

						//console.log(listaCodigos[k].replace(/[0-9]*Y/, ''));
						//console.log(listaCodigos[k].replace(/Y[0-9]*/, ''));
						
						//console.log(listaCodigos[k]);

						const idART = listaCodigos[k].replace(/[0-9]*Y/, '');
						const codPA = listaCodigos[k].replace(/Y[0-9]*/, '');
				
						var datosCod = new FormData();
						datosCod.append("idPrestamo", respuesta);
						datosCod.append("idArticulo", idART);
						datosCod.append("codPatrimonial", codPA);
				
						$.ajax({
								url:"ajax/prestamos.ajax.php",
								method: "POST",
								data: datosCod,
								cache: false,
								contentType: false,
								processData: false,
								success: function(respuesta){
									
									if(respuesta != "ok"){
										swal({
											type: "error",
											title: "El prestamo no se ha guardado correctamente",
											showConfirmButton: true,
											confirmButtonText: "Cerrar"
											}).then(function(result){
												if (result.value) {
					  
												window.location = "prestar";
					  
												}
										  })
									}
									
								}
				
						})

						var datos = new FormData();
						datos.append("estadoIdCodA", idART);
						 datos.append("estadoCodArticulo", 2);
				   
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

					}

					swal({
						type: "success",
						title: "Prestamo Satisfactorio",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"
						}).then(function(result){
						  if (result.value) {

						  window.location = "prestar";

						  }
					})

				}

		})


		
	}else{

		 swal({
		  title: "Llenar todos los campos obligatorios",
		  type: "error",
		  confirmButtonText: "¡Cerrar!"
		});

		return;

	}					

})



