<?php

class ControladorCategoria{

	/*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/

	static public function ctrMostrarCategoria($item, $valor){

		$tabla = "categoria";

		$respuesta = ModeloCategoria::mdlMostrarCategoria($tabla, $item, $valor);

		return $respuesta;

	}

	static public function ctrValidarCategoria($item, $valor){

		$tabla = "categoria";

		$respuesta = ModeloCategoria::mdlValidarCategoria($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	CREAR CATEGORIAS
	=============================================*/

	static public function ctrCrearCategoria($datos){
		
		if(isset($datos["tituloCategoriaM"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $datos["tituloCategoriaM"])){

				$datos = array(
					"ruta"=>$datos["rutaCategoriaM"],
					"titulo"=>$datos["tituloCategoriaM"]
				);

				$respuesta = ModeloCategoria::mdlIngresarCategoriaM("categoria", $datos);

				return $respuesta;

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La categoría no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  })

			  	</script>';

			  	return;

			}

		}

	}



	/*=============================================
	EDITAR CATEGORIAS
	=============================================*/

	static public function ctrEditarCategoria(){

		if(isset($_POST["editarTituloCategoria"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarTituloCategoria"]) && preg_match('/^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["descripcionCategoria"]) ){

				/*=============================================
				VALIDAR IMAGEN PORTADA
				=============================================*/

				$rutaPortada = $_POST["antiguaFotoPortada"];

				if(isset($_FILES["fotoPortada"]["tmp_name"]) && !empty($_FILES["fotoPortada"]["tmp_name"])){

					/*=============================================
					BORRAMOS ANTIGUA FOTO PORTADA
					=============================================*/

					unlink($_POST["antiguaFotoPortada"]);

					/*=============================================
					DEFINIMOS LAS MEDIDAS
					=============================================*/

					list($ancho, $alto) = getimagesize($_FILES["fotoPortada"]["tmp_name"]);

					$nuevoAncho = 1280;
					$nuevoAlto = 720;

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/	

					if($_FILES["fotoPortada"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$rutaPortada = "vistas/img/cabeceras/".$_POST["rutaCategoria"].".jpg";

						$origen = imagecreatefromjpeg($_FILES["fotoPortada"]["tmp_name"]);	

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $rutaPortada);

					}

					if($_FILES["fotoPortada"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$rutaPortada = "vistas/img/cabeceras/".$_POST["rutaCategoria"].".png";

						$origen = imagecreatefrompng($_FILES["fotoPortada"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagealphablending($destino, FALSE);
    			
    					imagesavealpha($destino, TRUE);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $rutaPortada);

					}


				}

				/*=============================================
				VALIDAR IMAGEN OFERTA
				=============================================*/

				$rutaOferta = $_POST["antiguaFotoOferta"];

				if(isset($_FILES["fotoOferta"]["tmp_name"]) && !empty($_FILES["fotoOferta"]["tmp_name"])){

					/*=============================================
					BORRAMOS ANTIGUA FOTO OFERTA
					=============================================*/

					unlink($_POST["antiguaFotoOferta"]);

					/*=============================================
					DEFINIMOS LAS MEDIDAS
					=============================================*/

					list($ancho, $alto) = getimagesize($_FILES["fotoOferta"]["tmp_name"]);

					$nuevoAncho = 640;
					$nuevoAlto = 430;

					/*=============================================
					DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
					=============================================*/	

					if($_FILES["fotoOferta"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$rutaOferta = "vistas/img/ofertas/".$_POST["rutaCategoria"].".jpg";

						$origen = imagecreatefromjpeg($_FILES["fotoOferta"]["tmp_name"]);	

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $rutaOferta);

					}

					if($_FILES["fotoOferta"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$rutaOferta = "vistas/img/ofertas/".$_POST["rutaCategoria"].".png";

						$origen = imagecreatefrompng($_FILES["fotoOferta"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagealphablending($destino, FALSE);
    			
    					imagesavealpha($destino, TRUE);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $rutaOferta);

					}


				}

				/*=============================================
				PREGUNTAMOS SI VIENE OFERTA EN CAMINO
				=============================================*/
				if($_POST["selActivarOferta"] == "oferta"){

					$datos = array("id"=>$_POST["editarIdCategoria"],
								   "categoria"=>strtoupper($_POST["editarTituloCategoria"]),
								   "ruta"=>$_POST["rutaCategoria"],
								   "estado"=> 1,
								   "idCabecera"=>$_POST["editarIdCabecera"],
								   "titulo"=>$_POST["editarTituloCategoria"],
								   "descripcion"=> $_POST["descripcionCategoria"],
								   "palabrasClaves"=>$_POST["pClavesCategoria"],
								   "imgPortada"=>$rutaPortada,
								   "oferta"=>1,
								   "precioOferta"=>$_POST["precioOferta"],
								   "descuentoOferta"=>$_POST["descuentoOferta"],
								   "imgOferta"=>$rutaOferta,								   
								   "finOferta"=>$_POST["finOferta"]);					

				}else{

					$datos = array("id"=>$_POST["editarIdCategoria"],
								   "categoria"=>strtoupper($_POST["editarTituloCategoria"]),
								   "ruta"=>$_POST["rutaCategoria"],
								   "estado"=> 1,
								   "idCabecera"=>$_POST["editarIdCabecera"],
								   "titulo"=>$_POST["editarTituloCategoria"],
								   "descripcion"=> $_POST["descripcionCategoria"],
								   "palabrasClaves"=>$_POST["pClavesCategoria"],
								   "imgPortada"=>$rutaPortada,
								   "oferta"=>0,
								   "precioOferta"=>0,
								   "descuentoOferta"=>0,
								   "imgOferta"=>"",								   
								   "finOferta"=>"");

					if($_POST["antiguaFotoOferta"] != ""){

						unlink($_POST["antiguaFotoOferta"]);

					}

				}

				ModeloSubCategorias::mdlActualizarOfertaSubcategorias("subcategorias", $datos, "ofertadoPorCategoria");	
				
				$traerProductos = ModeloProductos::mdlMostrarProductos("productos", "id_categoria", $datos["id"]);

				foreach ($traerProductos as $key => $value) {
					
					if($datos["oferta"] != 0 && $datos["precioOferta"] == 0){

						if($value["precio"] != 0){

							$precioOfertaActualizado = $value["precio"]-($value["precio"]*$datos["descuentoOferta"]/100);
							$descuentoOfertaActualizado = $datos["descuentoOferta"];

						}else{

							$precioOfertaActualizado = 0;
							$descuentoOfertaActualizado = 0;

						}

					}


					if($datos["oferta"] != 0 && $datos["descuentoOferta"] == 0){

						if($value["precio"] != 0){

							$precioOfertaActualizado = $datos["precioOferta"];
							$descuentoOfertaActualizado = 100 - ($datos["precioOferta"]*100/$value["precio"]);
	

						}else{

							$precioOfertaActualizado = 0;
							$descuentoOfertaActualizado = 0;

						}
						
					}

					ModeloProductos::mdlActualizarOfertaProductos("productos", $datos, "ofertadoPorCategoria", $precioOfertaActualizado, $descuentoOfertaActualizado, $value["id"]);

				}
				
				ModeloCabeceras::mdlEditarCabecera("cabeceras", $datos);

				$respuesta = ModeloCategorias::mdlEditarCategoria("categorias", $datos);

				if($respuesta == "ok"){

					echo'<script>

					swal({
						  type: "success",
						  title: "La categoría ha sido editada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "categorias";

							}
						})

					</script>';

				}

			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡La categoría no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  })

			  	</script>';

			  	return;

			}

		}

	}

	/*=============================================
	ELIMINAR CATEGORIA
	=============================================*/

	static public function ctrEliminarCategoria(){

		if(isset($_GET["idCategoriaM"])){

			/*=============================================
			QUITAR LAS CATEGORIAS DE LOS PRODUCTOS
			=============================================*/
			/*
			$traerProductos = ModeloProductos::mdlMostrarProductos("productos", "id_categoria", $_GET["idCategoria"]);

			if($traerProductos){

				foreach ($traerProductos as $key => $value) {

					$item1 = "id_categoria";
					$valor1 = 0;
					$item2 = "id";
					$valor2 = $value["id"];

					ModeloProductos::mdlActualizarProductos("productos", $item1, $valor1, $item2, $valor2);	
				
				}

			}
			*/
			$respuesta = ModeloCategoria::mdlEliminarCategoria("categoria", $_GET["idCategoriaM"]);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "La categoría ha sido borrada correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "articulos";

								}
							})

				</script>';

			}		


		}

	}


}