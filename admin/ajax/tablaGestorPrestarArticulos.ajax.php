<?php

require_once "../controladores/articulos.controlador.php";
require_once "../modelos/articulos.modelo.php";

require_once "../controladores/categorias.controladorM.php";
require_once "../modelos/categorias.modeloM.php";

class TablaArticulos{

  /*=============================================
  MOSTRAR LA TABLA DE ARTICULOS
  =============================================*/ 

  public function mostrarTablaArticulos(){
	
  	$item = null;
  	$valor = null;
	$idCat = array();
	
	$categoria = ControladorCategoria::ctrMostrarCategoria($item, $valor);
	
	for($i = 0; $i < count($categoria); $i++){
	
		$idCat[$categoria[$i]["idCategoria"]] = $categoria[$i]["titulo"];
	
	}

	/*
	$idCat = array();
	$NameCat = array();
	$tituloCateg = null;

	$categoria = ControladorCategoria::ctrMostrarCategoria($item, $valor);
	
	for($i = 0; $i < count($categoria); $i++){
	
		$idCat[$i] = $categoria[$i]["idCategoria"];
		$NameCat[$i] = $categoria[$i]["titulo"];
	
	}
	*/

  	$articulos = ControladorArticulos::ctrMostrarArticulos($item, $valor);

	$prestamos = ControladorArticulos::ctrMostrarPrestamos($item, $valor);

  	$datosJson = '

  		{
  			"data":[';

	 	for($i = 0; $i < count($prestamos); $i++){

			/*=============================================
  			TRAER LAS CATEGORÍAS
  			=============================================*/
			
			
			/*
			for($j = 0; $j < count($categoria); $j++){
				
				if($idCat[$j] == $articulos[$i]["idCategoria"]){
					$tituloCateg = $NameCat[$j];
					break;
				}
			
			}


			if($tituloCateg == null){

				$tituloCateg = "SIN CATEGORÍA";
			
			}

			*/
			/*
  			$item = "idCategoria";
			$valor = $articulos[$i]["idCategoria"];

			
			$categorias = ControladorCategoria::ctrMostrarCategoria($item, $valor);
			
			if($categorias["titulo"] == ""){

				$categoria = "SIN CATEGORÍA";
			
			}else{

				$categoria = $categorias["titulo"];
			}
			*/

			

			/*=============================================
  			AGREGAR ETIQUETAS DE ESTADO
  			=============================================*/
			/*
  			if($articulos[$i]["disponible"] == 0){

				$colorEstado = "btn-danger";
				$textoEstado = "Desactivado";
				$estadoArticulo = 1;

			}else{

				$colorEstado = "btn-success";
				$textoEstado = "Activado";
				$estadoArticulo = 0;

			}
			*/
			//$disponible = "<button class='btn btn-xs btnActivar ".$colorEstado."' idArticulo='".$articulos[$i]["idDetalleArticulo"]."' estadoArticulo='".$estadoArticulo."'>".$textoEstado."</button>";
			/*=============================================
  			TRAER IMAGEN PRINCIPAL
  			=============================================*/

			//$imagenPrincipal = "<a href='".$articulos[$i]["ruta"]."-prestamo'><img src='".$articulos[$i]["portada"]."' class='img-thumbnail imgTablaPrincipal' width='100px'></a>";

			/*=============================================
			TRAER MULTIMEDIA
  			=============================================*/

  			
			//		"'.$idCat[$prestamos[$i]["idCategoria"]].'",

			/*=============================================
  			TRAER LAS ACCIONES
  			=============================================*/

			$accionesV = "<div class='btn-group'><button class='btn btn-success btnVerPrestamo' idPrestamo='".$prestamos[$i]["idPrestamo"]."' data-toggle='modal' data-target='#modalVerPrestamo'><i class='fa fa-eye'></i></button></div>";

			//$acciones = "<div class='btn-group'><button class='btn btn-warning btnEditarArticulo' idArticulo='".$articulos[$i]["idDetalleArticulo"]."' data-toggle='modal' data-target='#modalEditarArticulo'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btnEliminarArticulo' idArticulo='".$articulos[$i]["idDetalleArticulo"]."' rutaCabecera='".$articulos[$i]["ruta"]."' imgPrincipal='".$articulos[$i]["portada"]."'><i class='fa fa-times'></i></button></div>";

			$datosJson .='[
					
					"'.($i+1).'",
					"'.$accionesV.'",
					"'.$prestamos[$i]["numDocTitular"].'",
					"'.$prestamos[$i]["nombreTitular"].'",
					"'.$prestamos[$i]["plazoDias"].'",
					"'.$prestamos[$i]["nombrePrestamista"].'",
					"'.$prestamos[$i]["fecha"].'"
				
			],';

		}

		if($prestamos==null){
			$datosJson .='[
				
				"0",
				"null",
				"null",
				"null",
				"null",
				"null",
				"null"	   

			],';
		}

		$datosJson = substr($datosJson, 0, -1);

		$datosJson .= ']

		}';

		echo $datosJson;

  }


}

/*=============================================
ACTIVAR TABLA DE ARTICULOS
=============================================*/ 
$activarArticulo = new TablaArticulos();
$activarArticulo -> mostrarTablaArticulos();


